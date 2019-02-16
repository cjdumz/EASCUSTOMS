$(document).ready(function(){
$('.action').change(function(){
if($(this).val() != '')
{
var action = $(this).attr("id");
var query = $(this).val();
var result = '';
if(action == "personalId")
{
result = 'vehicleId';
}
$.ajax({
url:"process/fetchmakeseries.php",
method:"POST",
data:{action:action, query:query},
success:function(data){
$('#'+result).html(data);
}
})
}
});
});

s