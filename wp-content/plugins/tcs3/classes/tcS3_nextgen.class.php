<?php
/* Extends the base ops to support nextgen photogallery by photocrati */

class tcS3_Nextgen extends tcS3{
	public function __construct(){
		parent::__construct();

		//upload directory handling
		$this->galleryDir = "/gallery";

		if($this->use_S3){
			$this->nextgen_register_hooks();
		}
	}

	public function nextgen_register_hooks(){
		add_filter( 'ngg_get_image_url', array($this, 'nextgen_modify_url'), 10, 3 );
		add_action( 'ngg_delete_picture', array($this, 'nextgen_delete_image'), 10, 1 );
		add_action( 'ngg_after_new_images_added', array($this, 'nextgen_add_image'), 10, 2 ); 
		add_action( 'ngg_image_updated', array($this, 'nextgen_image_updated'), 10, 1 );
	}

	public function nextgen_modify_url($retval, $image, $size){
		$retval = $this->build_attachment_url($retval, $this->galleryDir);

		//error_log($url);
		
		return $retval;
	}

	public function nextgen_delete_image($pid){
		$data = $this->db->get_row("
			SELECT a.filename, b.path
			FROM {$this->db->nggpictures} a
			JOIN {$this->db->nggallery} b ON a.galleryid = b.gid
			WHERE pid = {$pid}
		");

		$match = "/" . preg_replace("/\//", "\/", $this->galleryDir) . "\/(.+)$/";

		preg_match($match, $data->path, $matches);

		$gallery = $matches[1];

		$keys = array(
			$gallery . "/" . $data->filename,
			$gallery . "/" . $data->filename . "_backup",
			$gallery . "/thumbs/thumbs_" . $data->filename
		);

		$this->delete_from_S3($keys, $this->galleryDir, false);
	}

	public function nextgen_add_image($galleryid, $image_ids) { 
		$image_ids = implode(", ", $image_ids);

		$data = $this->db->get_row("
			SELECT a.filename, b.path
			FROM {$this->db->nggpictures} a
			JOIN {$this->db->nggallery} b ON a.galleryid = b.gid
			WHERE a.pid = {$image_ids}
			AND b.gid = {$galleryid}
		");

		$match = "/" . preg_replace("/\//", "\/", $this->galleryDir) . "\/(.+)$/";

		preg_match($match, $data->path, $matches);

		$gallery = $matches[1];

		$keys = array(
			$gallery . "/" . $data->filename,
			$gallery . "/" . $data->filename . "_backup",
			$gallery . "/thumbs/thumbs_" . $data->filename
		);

		$this->push_to_s3($keys, NGG_IMPORT_ROOT . $this->galleryDir, "gallery");

	}

	public function nextgen_image_updated($image) { 
	    // make action magic happen here... 
	    $this->dump_to_log($image);
	} 
}