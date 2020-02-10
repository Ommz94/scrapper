$(document).ready(function(){

	$('.btn-clear-filter').click(function(){
		$("#content").unmark();
		$("input[name='keywords']").val('');
	});

	$('.btn-apply-filter').click(function(){
	    var keywords = $("input[name='keywords']").val();
	    keywords = keywords.split(',');
	 
	    $("#content").unmark({
	      done: function() {
	      	$.each(keywords, function(index, keyword){
	      		keyword = keyword.trim()				
	      		if(keyword.length > 0){
	      			$("#content").mark(keyword, {
				    	separateWordSearch: true,
				    });
	      		}
	      	});
	      }
	    });
	});

	$('#keyword-search-box-trigger').click(function(){
		$('.keyword-search-box').addClass('openned');
		$('#keyword-search-box-trigger').removeClass('openned');
		$("input[name='keywords']").val('');
	});

	$('.keyword-search-box button.close').click(function(){
		$('.keyword-search-box').removeClass('openned');
		$('#keyword-search-box-trigger').addClass('openned');
	});
});