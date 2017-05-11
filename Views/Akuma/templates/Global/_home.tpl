{extends file="Global/_full.tpl"}

{block name=content}

    <script type="text/javascript">
	    $(document).ready(function(){
		    //Slider instance 1
            /*
             var options = {
             main: ".player-slider",
             container: ".player-list",
             btn_next: ".next-player",
             btn_prev: ".prev-player",
             debug: true
             };
             var cs = new contentSlider(options);
             */
		    //Slider instance 2
		    var options2 = {
			    main: ".article-slider",
			    container: ".article-list",
			    btn_next: ".next",
			    btn_prev: ".prev"
		    };
		    var cs2 = new contentSlider(options2);

		    //Slider instance 3
		    var options3 = {
			    main: ".team-slider",
			    container: ".team-list",
			    btn_next: ".next-team",
			    btn_prev: ".prev-team"
		    };
		    var cs3 = new contentSlider(options3);
	    });
    </script>

    <section id="content">
    {include file="Global/_slider.tpl"}
    
    {include file="Global/_home_about.tpl"}
    
    {include file="Global/_home_news.tpl"}
    
    {include file="Global/_home_articles.tpl"}
    
    {include file="Global/_home_teams.tpl"}
    
    {include file="Global/_home_media.tpl"}
    </section>
{/block}