
<?php 

error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     
</head>
<body style="padding: 30px;">
    <?php 
    
    
 $arraya='{
	"estimate_num": "5",
	"event_num": "9",
	"dateItems": [
		[{
			"items": [{
				"id": "room_1",
				"seq": "1",
				"roomName": "Room1"
			}, {
				"id": "crew_line_45969",
				"seq": "45969",
				"pos_code": "SAA3",
				"pos_name": "Stagehand - Audio - A3 - Asst",
				"union_code": "U1220",
				"union_name": "IBEW LOCAL 1220",
				"ded_time_hours": "1.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "20:00",
				"st_total_hours": "8",
				"ot_total_hours": "3",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "93",
				"ot_rate_est": "139.5",
				"dt_rate_est": "186",
				"pf_rate_est": "418.5"
			}, {
				"id": "crew_line_98950",
				"seq": "98950",
				"pos_code": "EECD",
				"pos_name": "Coordinator - Union Payroll",
				"union_code": "EVENT C",
				"union_name": "Coordinator",
				"ded_time_hours": "0.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "17:00",
				"st_total_hours": "8",
				"ot_total_hours": "1",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "90",
				"ot_rate_est": "135",
				"dt_rate_est": "180",
				"pf_rate_est": "0"
			}, {
				"id": "crew_line_266783",
				"seq": "266783",
				"pos_code": "SAA2",
				"pos_name": "Stagehand - Audio - A2 - Head",
				"union_code": "U2",
				"union_name": "I.A.T.S.E Local No. 2",
				"ded_time_hours": "1.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "17:00",
				"st_total_hours": "8",
				"ot_total_hours": "0",
				"dt_total_hours": "0",
				"pf_total_hours": "5",
				"st_rate_est": "95",
				"ot_rate_est": "142.5",
				"dt_rate_est": "190",
				"pf_rate_est": "427.5"
			}, {
				"id": "crew_line_274860",
				"seq": "274860",
				"pos_code": "SAA1",
				"pos_name": "Stagehand - Audio - A1 - Head",
				"union_code": "U2",
				"union_name": "I.A.T.S.E Local No. 2",
				"ded_time_hours": "1.00",
				"qty": "1",
				"start_time": "09:00",
				"end_time": "17:00",
				"st_total_hours": "8",
				"ot_total_hours": "0",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "95",
				"ot_rate_est": "142.5",
				"dt_rate_est": "190",
				"pf_rate_est": "427.5"
			}],
			"event_date": "04\/25\/2019",
			"item_id": "dateDiv_1",
			"item_seq": "1",
			"parentValue": "04\/25\/2019",
			"type": "crew"
		}, {
			"items": [{
				"id": "room_2",
				"seq": "2",
				"roomName": "Room1"
			}, {
				"id": "crew_line_23405",
				"seq": "23405",
				"pos_code": "SAVA",
				"pos_name": "Stagehand - AV Assist",
				"union_code": "U2",
				"union_name": "I.A.T.S.E Local No. 2",
				"ded_time_hours": "1.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "16:00",
				"st_total_hours": "7",
				"ot_total_hours": "0",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "93",
				"ot_rate_est": "139.5",
				"dt_rate_est": "186",
				"pf_rate_est": "418.5"
			}, {
				"id": "crew_line_217419",
				"seq": "217419",
				"pos_code": "EECDa",
				"pos_name": "Coordinator - Union Payroll",
				"union_code": "EVENT C",
				"union_name": "Coordinator",
				"ded_time_hours": "0.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "17:00",
				"st_total_hours": "8",
				"ot_total_hours": "1",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "90",
				"ot_rate_est": "135",
				"dt_rate_est": "180",
				"pf_rate_est": "0"
			}, {
				"id": "note_1",
				"seq": "1",
				"noteName": "Note1"
			}, {
				"id": "crew_line_78181",
				"seq": "78181",
				"pos_code": "SAA1",
				"pos_name": "Stagehand - Audio - A1 - Head",
				"union_code": "U2",
				"union_name": "I.A.T.S.E Local No. 2",
				"ded_time_hours": "1.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "16:00",
				"st_total_hours": "7",
				"ot_total_hours": "0",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "99",
				"ot_rate_est": "142.5",
				"dt_rate_est": "190",
				"pf_rate_est": "427.5"
			}],
			"event_date": "04\/26\/2019",
			"item_id": "dateDiv_2",
			"item_seq": "2",
			"parentValue": "04\/26\/2019",
			"type": "crew"
		}, {
			"event_date": "04\/27\/2019",
			"item_id": "dateDiv_3",
			"item_seq": "3",
			"parentValue": "04\/27\/2019"
		}, {
			"event_date": "04\/28\/2019",
			"item_id": "dateDiv_4",
			"item_seq": "4",
			"parentValue": "04\/28\/2019"
		}, {
			"event_date": "04\/29\/2019",
			"item_id": "dateDiv_5",
			"item_seq": "5",
			"parentValue": "04\/29\/2018"
		}]
	]
}';  

 $arrayb='{
	"estimate_num": "5",
	"event_num": "90",
	"dateItems": [
		[{
			"items": [{
				"id": "room_1",
				"seq": "1",
				"roomName": "Room1"
			}, {
				"id": "crew_line_45969",
				"seq": "459699",
				"pos_code": "SAA38",
				"pos_name": "Stagehand - Audio - A3 - Asst",
				"union_code": "U1220",
				"union_name": "IBEW LOCAL 12200",
				"ded_time_hours": "1.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "20:00",
				"st_total_hours": "8",
				"ot_total_hours": "3",
				"dt_total_hours": "0",
				"pf_total_hours": "5",
				"st_rate_est": "93",
				"ot_rate_est": "139.5",
				"dt_rate_est": "186",
				"pf_rate_est": "418.56"
			}, {
				"id": "crew_line_98950",
				"seq": "98950",
				"pos_code": "EECD",
				"pos_name": "Coordinator - Union Payroll",
				"union_code": "EVENT C",
				"union_name": "Coordinator",
				"ded_time_hours": "0.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "17:00",
				"st_total_hours": "8",
				"ot_total_hours": "1",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "90",
				"ot_rate_est": "135",
				"dt_rate_est": "180",
				"pf_rate_est": "0"
			}, {
				"id": "crew_line_266783",
				"seq": "266783",
				"pos_code": "SAA29",
				"pos_name": "Stagehand - Audio - A2 - Head",
				"union_code": "U2",
				"union_name": "I.A.T.S.E Local No. 2",
				"ded_time_hours": "1.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "17:00",
				"st_total_hours": "8",
				"ot_total_hours": "0",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "95",
				"ot_rate_est": "142.5",
				"dt_rate_est": "190",
				"pf_rate_est": "427.5"
			}, {
				"id": "crew_line_274860",
				"seq": "274860",
				"pos_code": "SAA1",
				"pos_name": "Stagehand - Audio - A1 - Head",
				"union_code": "U2",
				"union_name": "I.A.T.S.E Local No. 2",
				"ded_time_hours": "1.00",
				"qty": "5",
				"start_time": "09:00",
				"end_time": "17:00",
				"st_total_hours": "8",
				"ot_total_hours": "0",
				"dt_total_hours": "0",
				"pf_total_hours": "6",
				"st_rate_est": "95",
				"ot_rate_est": "142.5",
				"dt_rate_est": "190",
				"pf_rate_est": "427.5"
			}, {
				"id": "crew_line_274860",
				"seq": "274860",
				"pos_code": "SAA1",
				"pos_name": "Stagehand - Audio - A1 - Head",
				"union_code": "U2",
				"union_name": "I.A.T.S.E Local No. 2",
				"ded_time_hours": "1.00",
				"qty": "5",
				"start_time": "09:00",
				"end_time": "17:00",
				"st_total_hours": "8",
				"ot_total_hours": "0",
				"dt_total_hours": "0",
				"pf_total_hours": "6",
				"st_rate_est": "95",
				"ot_rate_est": "142.5",
				"dt_rate_est": "190",
				"pf_rate_est": "427.5"
			}, {
				"id": "crew_line_274860",
				"seq": "274860",
				"pos_code": "SAA1",
				"pos_name": "Stagehand - Audio - A1 - Head",
				"union_code": "U2",
				"union_name": "I.A.T.S.E Local No. 2",
				"ded_time_hours": "1.00",
				"qty": "5",
				"start_time": "09:00",
				"end_time": "17:00",
				"st_total_hours": "8",
				"ot_total_hours": "0",
				"dt_total_hours": "0",
				"pf_total_hours": "6",
				"st_rate_est": "95",
				"ot_rate_est": "142.5",
				"dt_rate_est": "190",
				"pf_rate_est": "427.5"
			}],
			"event_date": "04\/25\/2019",
			"item_id": "dateDiv_1",
			"item_seq": "1",
			"parentValue": "04\/25\/2019",
			"type": "crew"
		}, {
			"items": [{
				"id": "room_2",
				"seq": "2",
				"roomName": "Room1"
			}, {
				"id": "crew_line_23405",
				"seq": "23405",
				"pos_code": "SAVA",
				"pos_name": "Stagehand - AV Assist",
				"union_code": "U2",
				"union_name": "I.A.T.S.E Local No. 2",
				"ded_time_hours": "1.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "16:00",
				"st_total_hours": "7",
				"ot_total_hours": "0",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "93",
				"ot_rate_est": "139.5",
				"dt_rate_est": "186",
				"pf_rate_est": "418.5"
			}, {
				"id": "crew_line_217419",
				"seq": "217419",
				"pos_code": "EECD",
				"pos_name": "Coordinator - Union Payroll",
				"union_code": "EVENT C",
				"union_name": "Coordinator",
				"ded_time_hours": "0.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "17:00",
				"st_total_hours": "8",
				"ot_total_hours": "1",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "90",
				"ot_rate_est": "135",
				"dt_rate_est": "180",
				"pf_rate_est": "0"
			}, {
				"id": "note_1",
				"seq": "1",
				"noteName": "Note1"
			}, {
				"id": "crew_line_78181",
				"seq": "78181",
				"pos_code": "SAA1",
				"pos_name": "Stagehand - Audio - A1 - Head",
				"union_code": "U2",
				"union_name": "I.A.T.S.E Local No. 2",
				"ded_time_hours": "1.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "16:00",
				"st_total_hours": "7",
				"ot_total_hours": "0",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "99",
				"ot_rate_est": "142.5",
				"dt_rate_est": "190",
				"pf_rate_est": "427.5"
			}, {
				"id": "crew_line_78181",
				"seq": "78181",
				"pos_code": "SAA1",
				"pos_name": "Stagehand - Audio - A1 - Head",
				"union_code": "U2",
				"union_name": "I.A.T.S.E Local No. 2",
				"ded_time_hours": "1.00",
				"qty": "1",
				"start_time": "08:00",
				"end_time": "16:00",
				"st_total_hours": "7",
				"ot_total_hours": "0",
				"dt_total_hours": "0",
				"pf_total_hours": "0",
				"st_rate_est": "99",
				"ot_rate_est": "142.5",
				"dt_rate_est": "190",
				"pf_rate_est": "427.5"
			}],
			"event_date": "04\/26\/2019",
			"item_id": "dateDiv_2",
			"item_seq": "2",
			"parentValue": "04\/26\/2019",
			"type": "crew"
		}, {
			"event_date": "04\/27\/2019",
			"item_id": "dateDiv_3",
			"item_seq": "3",
			"parentValue": "04\/27\/2019"
		}, {
			"event_date": "04\/28\/2019",
			"item_id": "dateDiv_4",
			"item_seq": "4",
			"parentValue": "04\/28\/2019"
		}, {
			"event_date": "04\/29\/2019",
			"item_id": "dateDiv_5",
			"item_seq": "5",
			"parentValue": "04\/29\/2018"
		}]
	]
}';     
       
$array1 = json_decode($arraya,true);
$array2 = json_decode($arrayb,true);
    
$conteo=count($array1['dateItems'][0][0]['items']);  
$conteo2=count($array2['dateItems'][0][0]['items']);
    
$conteoprincipal=count($array1['dateItems'][0]);    
$conteoprincipal2=count($array2['dateItems'][0]);
 
     
     
 ?>
    
    

<div style="display:flex;width:100%;justify-content: space-between;flex-wrap:wrap">

<div class="container" style="width:760px !important">
 
<div class="table-responsive" style="padding: 10px;">

<?php  
     
for ($contp = 0; $contp <$conteoprincipal ; $contp++){     

?>

<h3>JSON Base</h3>
<h3 style="background: #ec6060;height: 40px;padding: 10px;margin: 0px !important;width:100%;color:#fff;"><?php echo $array1['dateItems'][0][$contp]['event_date'] ?></h3>
<?php if($array1['dateItems'][0][$contp]['items'][0]['roomName']!=''){ ?>
<h4 style="background: #ccc;height: 40px;padding: 10px;margin: 0px !important;width:100%;"><?php echo $array1['dateItems'][0][$contp]['items'][0]['roomName'] ?></h4>
<?php };?>
  <table class="table table-hover" style="background: #efefef;">
  

   <thead>
      <tr>
        <th>CODE</th>
        <th>Position Name</th>
        <th>Qty</th>
        <th>Labor name</th>
        <th>Start</th>
        <th>End</th>
        <th>Ded</th>
        <th>Tti</th>
        <th>Price</th>
        <th>ST</th>
        <th>OT</th>
        <th>DT</th>
        <th>PF</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
     
     <?php 
                                                      
      $conteo=count($array1['dateItems'][0][$contp]['items']);
      for ($cont = 1; $cont <$conteo ; $cont++){

      ?>
      
      
      
      <tr>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['pos_code']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['pos_name']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['qty']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['union_name']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['start_time']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['end_time']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['ded_time_hours']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['st_rate_est']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['st_rate_est']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['st_total_hours']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['ot_total_hours']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['dt_total_hours']; ?></td>
        <td><?php echo $array1['dateItems'][0][$contp]['items'][$cont]['pf_total_hours']; ?></td>
       </tr>
         <?php 

} 
      ?>

    </tbody>  

  </table>
<?php  
     
};    

?>
</div>

</div>


<!----------------------------------------------------------------------------TablaB---------------------------------------------------------------------------->



<div class="container" style="width:760px !important">
<div class="table-responsive" style="padding: 10px;">

<h3>JSON Nuevo</h3>

<?php  
     
for ($contp = 0; $contp <$conteoprincipal2 ; $contp++){     

?>

<h3 style="background: #ec6060;height: 40px;padding: 10px;margin: 0px !important;width:100%;color:#fff;"><?php echo $array2['dateItems'][0][$contp]['event_date'] ?></h3>
<?php if($array2['dateItems'][0][$contp]['items'][0]['roomName']!=''){ ?>
<h4 style="background: #ccc;height: 40px;padding: 10px;margin: 0px !important;width:100%;"><?php echo $array2['dateItems'][0][$contp]['items'][0]['roomName'] ?></h4>
<?php };?>
 
 
  <table class="table table-hover"  style="background: #efefef;">
  
   <thead>
      <tr>
        <th>CODE</th>
        <th>Position Name</th>
        <th>Qty</th>
        <th>Labor name</th>
        <th>Start</th>
        <th>End</th>
        <th>Ded</th>
        <th>Tti</th>
        <th>Price</th>
        <th>ST</th>
        <th>OT</th>
        <th>DT</th>
        <th>PF</th>
        <th>Total</th>
      </tr>
    </thead>  
    <tbody>
     

      <?php 
                                                       
      $conteo2=count($array2['dateItems'][0][$contp]['items']);
      for ($cont2 = 1; $cont2 <$conteo2 ; $cont2++){
        
      $conteo=count($array1['dateItems'][0][$contp]['items'])-1;
          
      ?>     
      <tr>
       
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['pos_code']; ?></td>
        
      <?php }else if ($array1['dateItems'][0][$contp]['items'][$cont2]['pos_code']!=$array2['dateItems'][0][$contp]['items'][$cont2]['pos_code']){ ?>
       
       <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['pos_code']; ?></td>
       
       <?php }else {?>
          
      <td><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['pos_code']; ?></td>
          
     <?php } ?>
       
<!------------------------------------------------------------bloque------------------------------------------------------------>
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['pos_name']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['pos_name']!=$array2['dateItems'][0][$contp]['items'][$cont2]['pos_name']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['pos_name']; ?></td>
        
      <?php }else { ?>
       
       <td><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['pos_name']; ?></td>
       
       <?php } ?> 
       
<!------------------------------------------------------------bloque------------------------------------------------------------>
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['qty']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['qty']!=$array2['dateItems'][0][$contp]['items'][$cont2]['qty']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['qty']; ?></td>
        
      <?php }else { ?>
       
       <td><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['qty']; ?></td>
       
       <?php } ?>            
                         
<!------------------------------------------------------------bloque------------------------------------------------------------>
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['union_name']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['union_name']!=$array2['dateItems'][0][$contp]['items'][$cont2]['union_name']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['union_name']; ?></td>
        
      <?php }else { ?>
       
       <td><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['union_name']; ?></td>
       
       <?php } ?>         

<!------------------------------------------------------------bloque------------------------------------------------------------>
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['start_time']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['start_time']!=$array2['dateItems'][0][$contp]['items'][$cont2]['start_time']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['start_time']; ?></td>
        
      <?php }else { ?>
       
       <td><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['start_time']; ?></td>
       
       <?php } ?>
<!------------------------------------------------------------bloque------------------------------------------------------------>
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['end_time']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['end_time']!=$array2['dateItems'][0][$contp]['items'][$cont2]['end_time']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['end_time']; ?></td>
        
      <?php }else { ?>
       
       <td><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['end_time']; ?></td>
       
       <?php } ?>
<!------------------------------------------------------------bloque------------------------------------------------------------>
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['ded_time_hours']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['ded_time_hours']!=$array2['dateItems'][0][$contp]['items'][$cont2]['ded_time_hours']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['ded_time_hours']; ?></td>
        
      <?php }else { ?>
       
       <td><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['ded_time_hours']; ?></td>
       
       <?php } ?>
<!------------------------------------------------------------bloque------------------------------------------------------------>
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['st_rate_est']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['st_rate_est']!=$array2['dateItems'][0][$contp]['items'][$cont2]['st_rate_est']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['st_rate_est']; ?></td>
        
      <?php }else { ?>
       
       <td><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['st_rate_est']; ?></td>
       
       <?php } ?>
<!------------------------------------------------------------bloque------------------------------------------------------------>
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['st_rate_est']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['st_rate_est']!=$array2['dateItems'][0][$contp]['items'][$cont2]['st_rate_est']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['st_rate_est']; ?></td>
        
      <?php }else { ?>
       
       <td><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['st_rate_est']; ?></td>
       
       <?php } ?>
<!------------------------------------------------------------bloque------------------------------------------------------------>
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['st_total_hours']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['st_total_hours']!=$array2['dateItems'][0][$contp]['items'][$cont2]['st_total_hours']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['st_total_hours']; ?></td>
        
      <?php }else { ?>
       
       <td><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['st_total_hours']; ?></td>
       
       <?php } ?>
<!------------------------------------------------------------bloque------------------------------------------------------------>
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['ot_total_hours']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['ot_total_hours']!=$array2['dateItems'][0][$contp]['items'][$cont2]['ot_total_hours']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['ot_total_hours']; ?></td>
        
      <?php }else { ?>
       
       <td><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['ot_total_hours']; ?></td>
       
       <?php } ?>
<!------------------------------------------------------------bloque------------------------------------------------------------>
      
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['dt_total_hours']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['dt_total_hours']!=$array2['dateItems'][0][$contp]['items'][$cont2]['dt_total_hours']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['dt_total_hours']; ?></td>
        
      <?php }else { ?>
       
       <td> <?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['dt_total_hours']; ?></td>
       
       <?php } ?>
       
<!------------------------------------------------------------bloque------------------------------------------------------------>       
       
       <?php if ($cont2>$conteo){ ?>
       
        <td style="background: #87e287;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['pf_total_hours']; ?></td>
        
      <?php }else if($array1['dateItems'][0][$contp]['items'][$cont2]['pf_total_hours']!=$array2['dateItems'][0][$contp]['items'][$cont2]['pf_total_hours']){ ?>
       
        <td style="background: #f9e86e;"><?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['pf_total_hours']; ?></td>
        
      <?php }else { ?>
       
       <td> <?php echo $array2['dateItems'][0][$contp]['items'][$cont2]['pf_total_hours']; ?></td>
       
       <?php } ?>
      </tr>
         <?php 

} 
      ?>    
    </tbody>
  </table>
         <?php 

} 
      ?>
</div>  
</div> 
  
</div>    
</body>
</html>