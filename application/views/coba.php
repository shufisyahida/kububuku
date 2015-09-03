<html>
<head>
<title>Image crop with jquery</title>
</head>

<script type="text/javascript" src="<?php echo base_url('assets/js/materialize.js') ?>"></script>


<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.imgareaselect.pack.js');?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/imgareaselect-default.css');?>" />


<style>
.cropimage
{
 background-color: aquamarine;
 alignment-adjust: central;
}
.animate
{
	transition: all 0.1s;
	-webkit-transition: all 0.1s;
}

.action-button
{
	position: relative;
	padding: 10px 40px;
  margin: 0px 10px 10px 0px;
  float: left;
	border-radius: 10px;
	font-family: 'Pacifico', cursive;
	font-size: 14px;
	color: #FFF;
	text-decoration: none;	
}


.red
{
	background-color: #E74C3C;
	border-bottom: 5px solid #BD3E31;
	text-shadow: 0px -2px #BD3E31;
}


.action-button:active
{
	transform: translate(0px,5px);
  -webkit-transform: translate(0px,5px);
	border-bottom: 1px solid;
}
.yellow
{
	background-color: #F2CF66;
	border-bottom: 5px solid #D1B358;
	text-shadow: 0px -2px #D1B358;
        float: left;
}
</style>
<div class="cropimage">
    <h1>eKnowledgetree Programming Blog - For More Knowledge Please Visit @ <a href="http://www.eknowledgetree.com/" background-color="red">  
    eKnowledgeTree</a></h1>  
</div>
 <?php echo form_open_multipart('index.php/pendaftaran/potongGambar');?>
<div id="cropimage"  class="cropimage">
 <table width="958">
 
  <tr>
      <td><h1>Image Upload</h1></td>
      <td><input type="file" name="userfile" name="userfile"></td>
   
    <td><input type="hidden" name="image_name" id="image_name" value="<?php echo $img; ?>" ></td>
   </tr>
  <br>
   <tr>
    <td>
    <td><input type="submit" value="Submit" class="action-button shadow animate red"/></td>
  </tr>
 </table>
<div style="margin:0 auto; width:600px">
    <h1>Please drag on the image</h1>
    <img src='<?php echo base_url();?>uploads/<?php echo $img; ?>' id="photo" style='max-width:500px' >

</div>
</div>
<div id="thumbs" style='max-width:500px'></div>
<?php echo form_close();?>

<script type="text/javascript">
alert("teest");
function getSizes(im,obj)
	{
		alert("test");
		var x_axis = obj.x1;
		var x2_axis = obj.x2;
		var y_axis = obj.y1;
		var y2_axis = obj.y2;
		var thumb_width = obj.width;
		var thumb_height = obj.height;
                var img =$("#image_name").val();
		if(thumb_width > 0)
			{
				if(confirm("Do you want to save image..!"))
					{
						$.post('<?php echo base_url("index.php/pendaftaran/perbaruiGambar/");?>',
                                                  {
                                                   x_axis : x_axis,
                                                   y_axis : y_axis,
                                                   thumb_width:thumb_width,
                                                   thumb_height:thumb_height,
                                                   img :img
                                                  },
                                                  function(data)
						  {
                                                     alert(data);
						    $("#cropimage").show();
						    //$("#thumbs").html("");
						    $("#thumbs").html("<img src='<?php echo base_url('uploads/"+data+"');?>' />");
						  });

	                               }
                         }
                         }

$(document).ready(function () {
    alert("coba");
    $('img#photo').imgAreaSelect({
        aspectRatio: '1:1',
        onSelectEnd: getSizes
    });
});
</script>
