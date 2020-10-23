<?php

	function console_log( $data ){
		echo '<script>';
		echo 'console.log('. json_encode( $data ) .')';
		echo '</script>';
	}

	function qsort_1(&$array) {
		
		$left = 0;
		$right = count($array) - 1;
		
		quick_sort_asc_p($array, $left, $right);
		
	}

	function qsort_2(&$array) {
		
		$left = 0;
		$right = count($array) - 1;
		
		quick_sort_desc_p($array, $left, $right);
		
	}

	function qsort_3(&$array) {
		
		$left = 0;
		$right = count($array) - 1;
		
		quick_sort_asc_f($array, $left, $right);
		
	}

	function qsort_4(&$array) {
		
		$left = 0;
		$right = count($array) - 1;
		
		quick_sort_desc_f($array, $left, $right);
		
	}

	function quick_sort_asc_p(&$array, $left, $right) {
	
		$l = $left;
		$r = $right;
		
		$center = $array[(int)(($left + $right) / 2)]->itemPrice;
		
		do {
			
			while ($array[$r]->itemPrice > $center) {
				
				$r--;
				
			}
			
			while ($array[$l]->itemPrice < $center) {
				
				$l++;
				
			}
			
			if ($l <= $r) {
				
				list($array[$r], $array[$l]) = array($array[$l], $array[$r]);
				
				$l++;
				$r--;
				
			}
			
		} while ($l <= $r);
			
		if ($r > $left) {
				
			quick_sort_asc_p($array, $left, $r);
				
		}
			
		if ($l < $right) {
				
			quick_sort_asc_p($array, $l, $right);
				
		}
		
	}

	function quick_sort_desc_p(&$array, $left, $right) {
	
		$l = $left;
		$r = $right;
		
		$center = $array[(int)(($left + $right) / 2)]->itemPrice;
		
		do {
			
			while ($array[$r]->itemPrice < $center) {
				
				$r--;
				
			}
			
			while ($array[$l]->itemPrice > $center) {
				
				$l++;
				
			}
			
			if ($l <= $r) {
				
				list($array[$r], $array[$l]) = array($array[$l], $array[$r]);
				
				$l++;
				$r--;
				
			}
			
		} while ($l <= $r);
			
		if ($r > $left) {
				
			quick_sort_desc_p($array, $left, $r);
				
		}
			
		if ($l < $right) {
				
			quick_sort_desc_p($array, $l, $right);
				
		}
		
	}

	function quick_sort_asc_f(&$array, $left, $right) {
	
		
		$l = $left;
		$r = $right;
		
		$center = toPercentFloat($array[(int)(($left + $right) / 2)]->itemFloat);
		
		do {
			
			while (toPercentFloat($array[$r]->itemFloat) > $center) {
				
				$r--;
				
			}
			
			while (toPercentFloat($array[$l]->itemFloat) < $center) {
				
				$l++;
				
			}
				
			if ($l <= $r) {

				list($array[$r], $array[$l]) = array($array[$l], $array[$r]);

				$l++;
				$r--;

			}
			
		} while ($l <= $r);
			
		if ($r > $left) {
				
			quick_sort_asc_f($array, $left, $r);
				
		}
			
		if ($l < $right) {
				
			quick_sort_asc_f($array, $l, $right);
				
		}
		
	}

	function quick_sort_desc_f(&$array, $left, $right) {
	
		$l = $left;
		$r = $right;
		
		$center = toPercentFloat($array[(int)(($left + $right) / 2)]->itemFloat);
		
		do {
			
			while (toPercentFloat($array[$r]->itemFloat) < $center) {
				
				$r--;
				
			}
			
			while (toPercentFloat($array[$l]->itemFloat) > $center) {
				
				$l++;
				
			}
			
			if ($l <= $r) {
				
				list($array[$r], $array[$l]) = array($array[$l], $array[$r]);
				
				$l++;
				$r--;
				
			}
			
		} while ($l <= $r);
			
		if ($r > $left) {
				
			quick_sort_desc_f($array, $left, $r);
				
		}
			
		if ($l < $right) {
				
			quick_sort_desc_f($array, $l, $right);
				
		}
		
	}

	function toPercentFloat($str) {
	
		$str = substr($str, 0, strpos($str, ":"));
		$str = substr($str, 0, strlen($str) - 3).".".substr($str, strlen($str) - 3);
		
		if (substr($str, 0, strpos($str, ".")) == "")
			$str = "0".$str;
		
		return $str;
	
	}

	function floatNullToHigh(&$array) {
		
		foreach ($array as $val) {
			
			if ($val->itemQuality == null) {
				
				$val->itemFloat = "100000:000";
				
			}
			
		}
		
	}

	function floatNullToLow(&$array) {
		
		foreach ($array as $val) {
			
			if ($val->itemQuality == null) {
				
				$val->itemFloat = "0000:000";
				
			}
			
		}
		
	}

	function loadItemsArray($path) {
		
		$jsonDataItems = file_get_contents($path);
		$jsonIterator = new RecursiveIteratorIterator(
			new RecursiveArrayIterator(json_decode($jsonDataItems, TRUE)),
			RecursiveIteratorIterator::SELF_FIRST);
		$itemPrevKey = "";
		$jsonOnItemsScope = false;
		$currentItemsDataArray = [];

		$item = new ItemCsgo;

		foreach ($jsonIterator as $key => $val) {

			if (is_array($val)) {

				if ($jsonOnItemsScope) {

					if (strlen($key) > 1 &&
						 $itemPrevKey != "csdb") {

						array_push($currentItemsDataArray, $item);
						$item = new ItemCsgo;

					}

					$itemPrevKey = $key;

					if ($itemPrevKey != "s") {

					$item->itemName = $key;
					$tempItemName = $item->itemName;

					if(strlen($tempItemName) > 3) {

							$lastTwoLetters = substr($tempItemName, strlen($tempItemName) - 2);

							if ($lastTwoLetters == "BS" 
									|| $lastTwoLetters == "WW"
									|| $lastTwoLetters == "FT"
									|| $lastTwoLetters == "MW"
									|| $lastTwoLetters == "FN") {

								$item->itemQuality = $lastTwoLetters;
								$item->itemName = substr($tempItemName, 0, strlen($tempItemName) - 2);

							}

						}

					}

				}

				if ($key == "csdb") {

					$jsonOnItemsScope = true;

				}

			} else {

				if ($itemPrevKey == "s") {

					$tempStickerInfo = $key." ~src: ".$val;
					array_push($item->itemStickersArray, $tempStickerInfo);

				} else {

					if ($key == "i") {

						$item->itemImgLink = $val;

					}

					if ($key == "p") {

						$item->itemPrice = $val;

					}

					if ($key == "f") {

						$item->itemFloat = $val;

					}

					if ($key == "b") {

						$item->itemBotId = $val;

					}

					if ($key == "t") {

						$item->itemTimeLock = $val;

					}

					if ($key == "c") {

						$item->itemStattrak = $val;

					}

				}

			}

		}

		unset($currentItemsDataArray[0]);
		return $currentItemsDataArray;
		
	}

	function drawItems($arr, $cf, $sg) {
		
			$csgoItemStr = "";
			$sign = $sg;
			$coef = $cf;
			$ts = 3;
		
			if ($sign == "₽") {
				
				$ts = 1;
				
			}
		
			if (count($arr) < 1) {
				
				$csgoItemStr = "Sorry, no items was found.";
				
			} else {

				foreach ($arr as $value) {

				$idxForStBorder = strlen($csgoItemStr);
				$csgoItemStr = $csgoItemStr."<div class=\"csgo-item hidden\"><div class=\"csgo-item-adv\">";

				if ($value->itemStattrak == "1") {

						$csgoItemStr = $csgoItemStr."<div class=\"csgo-st sm-text-2 winf-text\">ST</div>";

						$posToStsInput = 21 + $idxForStBorder;
						$csgoItemStr = substr($csgoItemStr, 0, $posToStsInput)." csgo-item-st-border".substr($csgoItemStr, $posToStsInput);

				} else {

					$csgoItemStr = $csgoItemStr."<div class=\"csgo-st sm-text-2 winf-text\">  </div>";

				}

				if ($value->itemTimeLock != 0) {

					$csgoItemStr = $csgoItemStr."<div class=\"csgo-lock\"><img src=\"./src/img/clock.png\" width=\"16\" height=\"16\"></div>";

				} else {

					$csgoItemStr = $csgoItemStr."<div class=\"csgo-lock\">  </div>";

				}

				if ($value->itemQuality != null) {

					$csgoItemStr = $csgoItemStr."<div class=\"csgo-quality sm-text-2 winf-text\">".$value->itemQuality."</div>";

				} else {

					$csgoItemStr = $csgoItemStr."<div class=\"csgo-quality sm-text-2 winf-text\"></div>";

				}

				$csgoItemStr = $csgoItemStr."<div class=\"csgo-adv-price hidden\"></div>";
				$csgoItemStr = $csgoItemStr."<div class=\"clear-all\"></div>";
				$csgoItemStr = $csgoItemStr."<div class=\"csgo-item-bg\" 
							style=\"background-image: url('https://steamcommunity-a.akamaihd.net/economy/image/class/730/"
							.$value->itemImgLink."/96fx96fdpx2x')\"></div>";
				$csgoItemStr = $csgoItemStr."<div class=\"clear-all\"></div>";

				$value->itemPrice = number_format($value->itemPrice / 100, 2, '.', '');
				$userPrice = floatval($value->itemPrice) * floatval($coef);

				$csgoItemStr = $csgoItemStr."<div class=\"bottom-price sm-text-".$ts."\">".number_format((float)$userPrice, 2, '.', '').$sign."</div>";
					
				$tmpstr = $value->itemName;
				if (strlen($tmpstr) > 32) 
					$tmpstr = substr($tmpstr, 0, 32)."...";
					
				$csgoItemStr = $csgoItemStr."<div class=\"csgo-itemname hidden\">".$tmpstr."</div>";

				if ($value->itemFloat != "100000:000" && $value->itemFloat != "0000:000") {

					$csgoItemStr = $csgoItemStr."<div class=\"csgo-itemfloat hidden\">Float: ".toPercentFloat($value->itemFloat)."%</div>";

				}

				$csgoItemStr = $csgoItemStr."<div class=\"csgo-itembotid hidden\">Bot #".$value->itemBotId."</div>";

				if ($value->itemTimeLock != 0) {

					$csgoItemStr = $csgoItemStr."<div class=\"csgo-itemtimelock hidden\">Unlock in ".($value->itemTimeLock / 1000 / 60 / 60 / 24)." days</div>";

				}

				$stickersArray = $value->itemStickersArray;
				if (count($stickersArray) > 0) {

					$csgoItemStr = $csgoItemStr."<div class=\"csgo-stickercontainer hidden\">";

					foreach ($stickersArray as $arrVal) {

						$tempStr = $arrVal;
						
						$tmpstr = substr($tempStr, 0, strpos($tempStr, "~src:") - 1);
						if (strlen($tmpstr) > 28) 
							$tmpstr = substr($tmpstr, 0, 28)."...";
						
						$stickerName = $tmpstr;
						$stickerImgLink = substr($tempStr, strpos($tempStr, "~src:") + 6);

						$csgoItemStr = $csgoItemStr."<div class=\"csgo-sticker\" style=\"background-image: url('https://steamcdn-a.akamaihd.net/apps/730/icons/econ/stickers/".$stickerImgLink.".png'); background-size: 48px 36px; background-repeat: no-repeat\">".
						"<span class=\"tooltiptext\">".$stickerName."</span>"."</div>";

					}

					$csgoItemStr = $csgoItemStr."</div>";
				}

				$csgoItemStr = $csgoItemStr."</div></div>";
			}
				
		}
		
		return $csgoItemStr;
		
	}

	class ItemCsgo {
		
		public $itemName = "";
		public $itemQuality = null;
		public $itemImgLink = "";
		public $itemPrice = -1;
		public $itemFloat = "100000:000";
		public $itemBotId = -1;
		public $itemTimeLock = 0;
		public $itemStattrak = 0;
		public $itemStickersArray = [];
		
	}

	function stickers_filter($array, $bool) {
		
		$newArray = [];
		
		foreach ($array as $val) {
			
			if ($bool == "true") {
				
				array_push($newArray, $val);
				
			} else {
				
				if (count($val->itemStickersArray) > 0) {
					
					array_push($newArray, $val);
					
				}
				
			}
			
		}
		
		return $newArray;
	}

	function st_filter($array, $bool) {
		
		$newArray = [];
		
		foreach ($array as $val) {
			
			if ($bool == "true") {
				
				array_push($newArray, $val);
				
			} else {
				
				if ($val->itemStattrak == 1) {
					
					array_push($newArray, $val);
					
				}
				
			}
			
		}
		
		return $newArray;
	}

	function lock_filter($array, $bool) {
		
		$newArray = [];
		
		foreach ($array as $val) {
			
			if ($bool == "true") {
				
				if ($val->itemTimeLock == 0) {
					
					array_push($newArray, $val);
					
				}
				
			} else {
				
				array_push($newArray, $val);
				
			}
			
		}
		
		return $newArray;
	}

	function price_scope($array, $from, $to) {
		
		$newArray = [];
		
		foreach ($array as $val) {
			
			if (number_format($val->itemPrice / 100, 2, '.', ' ') >= $from 
				 	&& number_format($val->itemPrice / 100, 2, '.', ' ') <= $to) {
				
				array_push($newArray, $val);
				
			}
			
		}
		
		return $newArray;
		
	}

	function name_finder($array, $keyword) {
		
		$newArray = [];
		
		foreach ($array as $val) {
			
			if (strpos(strtolower($val->itemName), strtolower($keyword)) !== false) {
				
				array_push($newArray, $val);
				
			}
			
		}
		
		return $newArray;
	}

	function getCoef() {
		
		if (isset($_COOKIE['cf'])) {
			
			return $_COOKIE['cf'];
			
		}
		
		return 1;
		
	}

	function getSign() {
		
		if (isset($_COOKIE['sg'])) {
			
			return $_COOKIE['sg'];
			
		}
		
		return "$";
	}

	if (array_key_exists('stype', $_POST)) {
		
		$itemsArray = array_values(loadItemsArray("730.json"));

		switch ($_POST['stype']) {
				
			case "hp":
				qsort_2($itemsArray);
				break;
				
			case "lp":
				qsort_1($itemsArray);
				break;
				
			case "hf":
				floatNullToLow($itemsArray);
				qsort_4($itemsArray);
				break;
				
			case "lf":
				floatNullToHigh($itemsArray);
				qsort_3($itemsArray);
				break;
				
		}
		
		$dataStr = drawItems($itemsArray, getCoef(), getSign());
		echo "$dataStr";
		
  } else if (array_key_exists('t', $_POST)) {
		
		$itemsArray = array_values(loadItemsArray("730.json"));
		
		switch ($_POST['t']) {
				
			case "rr":
				qsort_2($itemsArray);
				break;
				
			case "pf":
				if ($_POST['kw'] != "")
					$itemsArray = name_finder($itemsArray, $_POST['kw']);
				break;
				
			case "ps":
				if ($_POST['pf'] != "" && $_POST['pt'] != "")
					$itemsArray = price_scope($itemsArray, $_POST['pf'], $_POST['pt']);
				break;
				
			case "bl":
					$itemsArray = lock_filter($itemsArray, $_POST['b']);
				break;
				
			case "sttm":
					$itemsArray = st_filter($itemsArray, $_POST['b']);
				break;
				
			case "stick":
					$itemsArray = stickers_filter($itemsArray, $_POST['b']);
				break;
				
		}
		
		$dataStr = drawItems($itemsArray, getCoef(), getSign());
		echo "$dataStr";
		
		
	} else {
		
		$itemsArray = array_values(loadItemsArray("730.json"));
		qsort_2($itemsArray);
		$dataStr = drawItems($itemsArray, getCoef(), getSign());
		echo "$dataStr";
		
	}

?>