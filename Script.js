 $(document).ready(function(){

 	var grid=$(".imageResults");
	grid.masonry({
		itemSelector:".gridItem",
		columnWidth:200,
		gutter:5,
		transitionDuration:0
		isInitLayout:false;
	});


	$(".result").on("click",function(){
		var id = $(this).attr("data-linkId");
		var url=$(this).attr("href");
		
		return false;
		if(!id){
		
		alert("data-linkID attribute not found!");
		}

		increseLinkClicks(id,url);

		return false;
	
	});

	
});
function increseLinkClicked(linkId,url){
 
	$.post("ajax/updateLinkCount.php",{linkId: linkId});

}