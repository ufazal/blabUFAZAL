<?php
/* Extends the base ops to support nextgen photogallery by photocrati */

class tcS3_Nextgen extends tcS3{
	public function __construct(){
		parent::__construct();

		if($this->use_S3){
			$this->nextgen_register_hooks();
		}
	}

	public function nextgen_register_hooks(){
		add_filter( 'ngg_get_image_url', array($this, 'nextgen_modify_url'), 99, 3 );
		add_action( 'ngg_delete_picture', array($this, 'nextgen_delete_image'), 10, 1 );
		add_action( 'ngg_after_new_images_added', array($this, 'nextgen_add_image'), 10, 2 ); 
		add_action( 'ngg_image_updated', array($this, 'nextgen_image_updated'), 10, 1 );
	}

	public function nextgen_modify_url($retval, $image, $size){	
		error_log("========== FILTERING {$retval} ================");

		if(preg_match("/wp-content\/(.+)\/[^.]+\.[A-Za-z]+$/", $retval, $matches)){
		
			$galleryDir = "/" . $matches[1];

			$retval = $this->build_attachment_url($retval, $galleryDir);

			
			error_log(var_export($galleryDir, true));
			error_log(var_export($retval, true));
		}

		//error_log($url);
		error_log("========== !FILTERING {$retval} ================");
		
		return $retval;
	}

	public function nextgen_delete_image($pid){
		$data = $this->db->get_row("
			SELECT a.filename, b.path
			FROM {$this->db->nggpictures} a
			JOIN {$this->db->nggallery} b ON a.galleryid = b.gid
			WHERE pid = {$pid}
		");

		error_log("========== RETVAL ================");
		error_log(var_export($data, true));
		error_log("========== !RETVAL ================");

		$match = "/" . preg_replace("/\//", "\/", $this->galleryDir) . "\/(.+)$/";

		preg_match($match, $data->path, $matches);

		$gallery = $matches[1];

		$keys = array(
			$gallery . "/REGEXGAPFILL/" . $data->filename,
			$gallery . "/REGEXGAPFILL/" . $data->filename . "_backup",
			$gallery . "/REGEXGAPFILL/thumbs/thumbs_" . $data->filename
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

		$galleryDir = $this->get_gallery_from_path($data->path);

		$match = "/" . preg_replace("/\//", "\/", $galleryDir) . "\/(.+)$/";

		preg_match($match, $data->path, $matches);

		$gallery = $matches[1];

		$keys = array(
			$gallery . "/REGEXGAPFILL/" . $data->filename,
			$gallery . "/REGEXGAPFILL/" . $data->filename . "_backup",
			$gallery . "/REGEXGAPFILL/thumbs/thumbs_" . $data->filename
		);

		error_log("========== Keys ================");
		error_log(var_export($keys, true));
		error_log(var_export(NGG_IMPORT_ROOT . $galleryDir, true));
		error_log("========== !Keys ================");

		$this->push_to_s3($keys, NGG_IMPORT_ROOT . $galleryDir, $galleryDir);

	}

	public function nextgen_image_updated($image) { 
	    // make action magic happen here... 
	    $this->dump_to_log($image);
	}

	public function get_gallery_from_path($path){
		preg_match("/wp-content\/(.+)\/?$/", $path, $matches);

		return "/" . $matches[1];
	}

	public function get_gallery_from_url($url){

	}
}