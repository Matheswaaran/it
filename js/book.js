// JavaScript Document
function updateBookstatus(date,day,hour){
	$.ajax({                                      
      url: 'book.php',
      data: "date="+date+"&day="+day+"&hour="+hour,
	  type:"POST",                        
      success: function(data){
		  alert(data);
	  } 
    });	
	
}