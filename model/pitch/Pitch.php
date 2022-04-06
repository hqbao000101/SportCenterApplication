<?php  
	class Pitch {
		protected $id;
		protected $name;
		protected $map;
		protected $location;
		protected $description;
		protected $features;
		protected $pitch_image;
		protected $related_images;
		protected $price;
		protected $start_time;
		protected $end_time;
		protected $available_date;

		function __construct($id, $name, $map, $location, $description, $features, $pitch_image, $related_images, $price, $start_time, $end_time, $available_date){
			$this->id = $id;
			$this->name = $name;
			$this->map = $map;
			$this->location = $location;
			$this->description = $description;
			$this->features = $features;
			$this->pitch_image = $pitch_image;
			$this->related_images = $related_images;
			$this->price = $price;
			$this->start_time = $start_time;
			$this->end_time = $end_time;
			$this->available_date = $available_date;
		}

		function getId() {
			return $this->id;
		}

		function getName() {
			return $this->name;
		}

		function getMap() {
			return $this->map;
		}

		function getLocation() {
			return $this->location;
		}

		function getDescription() {
			return $this->description;
		}

		function getFeatures() {
			return $this->features;
		}

		function getPitchImage() {
			return $this->pitch_image;
		}

		function getRelatedImage() {
			return $this->related_images;
		}

		function getPrice() {
			return $this->price;
		}

		function getStartTime() {
			return $this->start_time;
		}

		function getEndTime() {
			return $this->end_time;
		}

		function getAvailableDate() {
			return $this->available_date;
		}

		function setName($name) {
			$this->name = $name;
			return $this;
		}

		function setMap($map) {
			$this->map = $map;
			return $this;
		}

		function setLocation($location) {
			$this->location = $location;
			return $this;
		}

		function setDescription($description) {
			$this->description = $description;
			return $this;
		}

		function setFeatures($features) {
			$this->features = $features;
			return $this;
		}

		function setPitchImage($pitch_image) {
			$this->pitch_image = $pitch_image;
			return $this;
		}

		function setRelatedImages($related_images) {
			$this->related_images = $related_images;
			return $this;
		}

		function setPrice($price) {
			$this->price = $price;
			return $this;
		}

		function setStartTime($start_time) {
			$this->start_time = $start_time;
			return $this;
		}

		function setEndTime($end_time) {
			$this->end_time = $end_time;
			return $this;
		}

		function setAvailableDate($available_date) {
			$this->available_date = $available_date;
			return $this;
		}
	}
?>