<?php
	/** Include file */
	include_once($_SERVER ["DOCUMENT_ROOT"] . "/conf/inc_Config.php");

	$w_data = array();
	if (($handle = fopen("list.csv", "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			foreach( $data as $key => $value ){
				$data[ $key ] = iconv("EUC-KR", "UTF-8", $value);
			}

			$w_data[] = $data;
		}
	}

	$title_arr = array();
	$data = array();
	foreach((array)$w_data as $key => $value){
		if ( $key == "2" ){
			foreach((array)$value as $key2 => $val2){
				if ( empty($val2) )      continue;
				$title_arr[] = $val2;
			}
			continue;
		}

		$_tmp = array();
		if ( $key > 2 && !empty($value["1"]) ){
			foreach((array)$value as $key2 => $val2){
//				if ( $key2 == "0" )      continue;
				if ( count($title_arr) < $key2 )      break;
				$_tmp[] = $val2;
			}

			$data[] = $_tmp;
		}
	}

	include_once( SkinFileLoad(_INCLUDE_HEADER ));

?>
    <!-- contents -->
    <div id="g-contents">

        <h2 class="g-h2">큐딜리온 - 퍼블리싱 리스트</h2>
        <!-- ************************************************************************************************** -->
        <a href="./list.csv" download="list.csv"><button> Excel Download </button></a>
        <button style="float: right;padding-bottom:10px;" class="upload"> Excel Upload </button>
        <form name="frm" type="post" enctype="multipart/form-data">
            <input type="file" name="upload" style="display:none">
        </form>
        <!-- ************************************************************************************************** -->
        <table class="g-table">

            <thead>
            <tr>
				<?php
					foreach((array)$title_arr as $key => $value){
						echo "
			<th>{$value}</th>
			";
					}
				?>
            </tr>
            </thead>
            <tbody>
			<?php
				foreach((array)$data as $key => $value){
					echo "<tr>";
					foreach((array)$value as $key2 => $val2){
						$path = "";
						if ( $key2 == "5" && !empty($val2) ){
							$path = $val2;
						}

						$put_str = $val2;
						if ( $key2 == "6" && !empty($val2) ){
							$put_str = "<a href='./{$path}{$val2}' target='_blank'>{$val2}";
						}

						if ( $key2 == "0" )
							echo "
			<th>{$put_str}</th>
			";
						else
							echo "
			<td>{$put_str}</td>
			";
					}
					echo "</tr>";
				}
			?>
            </tbody>
        </table>
    </div>
    <!-- //contents -->


<?php
//	include_once( SkinFileLoad(_INCLUDE_FOOTER ));
?>