// var ckb = ['khanlanh'='Khăn lạnh','phonglanh'='Phòng lạnh'];
var menuThucAn=[
	{
		name:'Phở bò',
		value:15000
	},
	{
		name:'Cơm tấm',
		value:10000
	},
	{
		name:'Hủ tíếu Nam vang',
		value:16000
	},
	{
		name:'Bánh mì ốp la',
		value:8000
	},
	{
		name:'Hủ tiếu bò kho',
		value:12000
	},
	{
		name:'Bánh mì bò kho',
		value:10000
	},
	{
		name:'Cháo lòng',
		value:14000
	},
	{
		name:'Bún bò huế',
		value:18000
	},
	{
		name:'Bánh cuốn',
		value:8000
	}
]
var menuGiaiKhat=[
	{
		name:'Cà phê đá',
		value:5000
	},
	{
		name:'Cà phê sữa đá',
		value:6000
	},
	{
		name:'Nước ngọt các loại',
		value:4000
	},
	{
		name:'Cà phê đen',
		value:3000
	},
	{
		name:'Trà đá',
		value:1000
	},
	{
		name:'Chanh dây',
		value:8000
	},
	{
		name:'Nước cam tươi',
		value:12000
	},
	{
		name:'Sữa tươi',
		value:5000
	},
]
var menuDichVu=[
	{
		name:'Khăn lạnh',
		value:1000,
		id:'khanlanh'
	},
	{
		name:'Phòng lạnh',
		value:100000,
		id:'phonglanh'
	},
]
window.onload=function(){
	loadDropdown('thucan',menuThucAn);
	loadDropdown('nuoc',menuGiaiKhat);
	var dv = document.getElementById('dichvu');
	dv.innerHTML='';
	menuDichVu.forEach(function(value,index){
		var html=value.name+"<input id='"+value.id+"'type='checkbox' value='"+value.value+"' /><br>";
		dv.innerHTML+=html;
	});
}
function loadDropdown(id,array){
	var dom = document.getElementById(id);
	dom.innerHTML='';
	array.forEach(function(value,index){
		var html="<option value='"+value.value+"'>"+value.name+"</option>"
		dom.innerHTML+=html;
	});
}
function tinh_tien(){
	var thucdon = [];
	thucdon = thucdon.concat(getSelectValues('thucan'));
	thucdon = thucdon.concat(getSelectValues('nuoc'));
/* 	var nuoc   = getSelectValues('nuoc');
	var dichvu = getSelectValues('dichvu'); */
	
	var tongTien = 0;
	document.getElementById('wtfhoadon').style.display='none';
	var hoadon = document.getElementById('tableChild');
	var html  = ' <caption>Hóa đơn tính tiền</caption>';
	var i = 1;
	var tbody = document.createElement('tbody');
	thucdon.forEach(function(ta,index){
		tongTien+=parseFloat(ta.value);
		html+="<tr><td>"+i+"</td><td>"+ta.name+"</td><td>"+dinh_dang_so(ta.value)+"</td></tr>";
		i++;
	});
	if($('#khanlanh')[0].checked){
		tongTien+=menuDichVu[0].value;
		html+="<tr><td>"+i+"</td><td>"+menuDichVu[0].name+"</td><td>"+dinh_dang_so(menuDichVu[0].value)+"</td></tr>";
		i++;
	}

	if($('#phonglanh')[0].checked){
		tongTien+=menuDichVu[1].value;
		html+="<tr><td>"+i+"</td><td>"+menuDichVu[1].name+"</td><td>"+dinh_dang_so(menuDichVu[1].value)+"</td></tr>";
	}
	html+="<tr class='price'><td></td><td>Tổng tiền</td><td>"+dinh_dang_so(tongTien)+"</td></tr>"
	hoadon.innerHTML=html;
	hoadon.style.display='';
	// var dichvu = getCheckbox('dichvu');
	// dichvu.forEach(function(value,index){
		// tongTien+=value;
		// var html = "<tr><td>"+i+"<td>"+value==1000?'Khăn lạnh':'Phòng lạnh'+"</td><td>"+dinh_dang_so(value)+"</td></tr>";
	// });
	
		
	
	
}
function getSelectValues(select) {
  var result = [];
$("#"+select+" option:selected").each(function () {
   var $this = $(this);
   if ($this.length) {
    result.push({
		name:$this.text(),
		value:$this.val()
	});
   }
});
  return result;
}
function getCheckbox(ck){
	var result = [];
	$("#"+ck+" input:checked").each(function(){
		var $this = $(this);
		result.push(parseFloat($this.val()));
	});
}
function dinh_dang_so(so){
	return so.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}