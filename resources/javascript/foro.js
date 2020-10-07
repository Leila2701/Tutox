function showDiscussions(cat_id){
		var html_id="#cat_discussions_"+cat_id;
		if($(html_id).css("display")=='block'){
			$(html_id).css("display" , "none");
		}else{
			$(html_id).css("display" , "block");
		}
	}

function starDiscussions(cat_id){
		var html_id="#cat_new_discussions_"+cat_id;
		var button_id="#starDiscussionsButton_"+cat_id;
		if($(html_id).css("display")=='block'){
			$(html_id).css("display" , "none");
			$(button_id).text("Iniciar Discucion");
		}else{
			$(html_id).css("display" , "block");
			$(button_id).text("Cancelar");
		}
	}

// function starDiscussions(cat_id){
// 		var html_id="#cat_new_discussions_"+cat_id;
// 		if($(html_id).css("display")=='block'){
// 			$(html_id).css("display" , "none");
// 		}else{
// 			$(html_id).css("display" , "block");
// 		}
// 	}