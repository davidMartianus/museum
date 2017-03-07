$(function(){
	otable();
});

function otable(){
	var oTable = $('#mytable').DataTable({
    	"dom": '<<t>ip>'
    });
	$('#filter').keyup(function(){
	      oTable.search($(this).val()).draw() ;
	})
}