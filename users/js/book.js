// JavaScript Document
function updateBookstatus(date,day,hour){
	$.ajax({                                      
      url: '../php/book.php',
      data: "date="+date+"&day="+day+"&hour="+hour,
	  type:"POST",                        
      success: function(data){
		  alert(data);
		  location.reload();
	  } 
    });	
	
}
function updateCancelstatus(date,day,hour){
	$.ajax({                                      
      url: '../php/cancel.php',
      data: "date="+date+"&day="+day+"&hour="+hour,
	  type:"POST",                        
      success: function(data){
		  alert(data);
		  location.reload();
	  } 
    });	
	
}