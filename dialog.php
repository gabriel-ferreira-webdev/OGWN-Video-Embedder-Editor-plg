<?php
/*
# -------------------------------------------------------------------------------------
# plg_edvem : Editor button plugin for the eXtro-media Embed Video Plugin
# -------------------------------------------------------------------------------------
# author    eXtro-media GbR
# copyright Copyright (C) 2015. All Rights Reserved
# license   GNU/GPL Version 3 or later - http://www.gnu.org/licenses/gpl-3.0.html
# website   www.eXtro-media.de
# technical support https://www.eXtro-media.de
# -------------------------------------------------------------------------------------
*/

    define( '_JEXEC', 1 );
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'JPATH_BASE', realpath( '..'.DS.'..'.DS.'..'.DS ) );
    require_once ( JPATH_BASE.DS.'includes'.DS.'defines.php' );
    require_once ( JPATH_BASE.DS.'includes'.DS.'framework.php' );

    $mainframe = JFactory::getApplication('administrator');
    jimport( 'joomla.plugin.plugin' );


    $jinput = JFactory::getApplication()->input;
    $ih_name = $jinput->get('ih_name', '', 'string');

    $lang = JFactory::getLanguage();
    $extension = 'plg_edvem';
    $base_dir = JPATH_BASE.'/administrator';
    $language_tag = $jinput->get('lang', 'en-GB', 'string');
    $lang->load($extension, $base_dir, $language_tag, true);

?>
<html>
    <head>
    <title><?php echo JText::_('PLG_EDVEM_TITLE'); ?></title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="../../../administrator/templates/isis/css/template.css?c5cf25cab274b47fd9fbab11e32fb9e7" type="text/css" />
    <script type="text/javascript">



        function insertTag() {
        	if (window.parent) {
        		var typ = document.getElementById('edvemtype').value;
        		var id  = document.getElementById('edvemid').value;
        	  if(id != '') {
        	    window.parent.jInsertEditorText('{vembed ' + typ + '=' + id + '}', '<?php echo $ih_name; ?>'); window.parent.jSelectEdvemCancel();
        	  } else {
        	  	document.getElementById('edvemid').style.backgroundColor = "red";
        	  }
        	}
        }


    </script>
    </head>

    <body>

    <form class="form-horizontal" name="edvemform" id="edvemform" onSubmit="return false;">
    <div class="container-fluid">
     <div class="row-fluid">
      <div class="span12">
       <h3><?php echo JText::_('PLG_EDVEM_TITLE'); ?></h3>
      </div>
     </div>

     <div class="row-fluid" style="max-height:250px; overflow-y:scroll;margin-bottom:24px;">
       <h5>Youtube:</h5>
       <p>
         Youtube is pretty straight forward, all you need is the VIDEO ID from the url.
         <br>
         <br>
      for example if you want to embed zen monkey :
      <br>
      <br>
      https://www.youtube.com/watch?v=q86g1aop6a8<br>
       <br>
      Isolate the ID "q86g1aop6a8" (everything after "=") and input it into the plugin<br>
      <br>
      <img src="img/youtube.png" alt="">
      <br>
      <br>
      so the output in your article editor will look like this:<br>
      <br>
      <code>{vembed Y=q86g1aop6a8}</code>
      <br>
      If any errors occur, try using the ID from the shortened version of the URL found in the share modal:
      <br>
      <img src="img/youtube2.png" alt="">
      <img src="img/youtube3.png" alt="">
      </p>
<br>
<h5>Vimeo</h5>
<p>Vimeo is just like Youtube:
<br><br>
https://vimeo.com/413848197
<br><br>
      Isolate the ID "413848197" (everything after "/") and input it into the plugin<br>
      <br>
      <img src="img/vimeo.png" alt="">
      <br>
      <br>
      so the output in your article editor will look like this:<br>
      <br>
      <code>{vembed V=413848197}</code>
</p>
<br>
<h5>DailyMotion</h5>
<p>
Just like the last two, all you need is the video ID:
<br><br>
https://www.dailymotion.com/video/x2up1e4
<br><br>
Isolate the ID "x2up1e4" (everything after "/") and input it into the plugin.<br><br>
<img src="img/dailymotion.png" alt="">
<br><br>
so the output in your article editor will look like this:<br>
<br>
<code>{vembed D=x2up1e4}</code>
</p>
<br>
<h5>LiveLeak</h5>
<p>
For LiveLeak all you need is also just the video ID:
<br><br>
https://www.liveleak.com/view?t=CNp5b_1611417061
<br><br>
Isolate the ID "CNp5b_1611417061" (everything after "=") and input it into the plugin.<br><br>
<img src="img/liveleak.png" alt="">
<br><br>
so the output in your article editor will look like this:<br>
<br>
<code>{vembed l=CNp5b_1611417061}</code>
</p>
<br>
<h5>BitChute</h5>
<p>
BitChute also works with ID only!
<br><br>
https://www.bitchute.com/video/lX7flj7ScSvj/
<br><br>
Isolate the ID "lX7flj7ScSvj" (everything after "/") and input it into the plugin.<br><br>
<img src="img/bitchute.png" alt="">
<br><br>
so the output in your article editor will look like this:<br>
<br>
<code>{vembed b=lX7flj7ScSvj}</code>
</p>
<br>
<h5>Odysee</h5>
<p>
First off we need to open the video page on Odysee itself and click on the share button:
<br><br>
https://odysee.com/@woeih:e/Mark-Passio-Interviewed-on-Authentic-Podcast-with-Henna-Maria-2020-11-02:5
<br>
<br>
<img src="img/odysee.png" alt="">
<br><br>
After that you will see a pop-up that looks like this, click on the embed video button, and copy the HTML code:
<br>
<br>

<img src="img/odysee-2-2.png" alt="">
<br>
<br>
You are going to extract everything after <code>embed/</code> and before <code>" allowfullscreen</code>
<br>
<br>
So for this example this is what you will extract(right click and "view image" to zoom in):
<br>
<br>
<img src="img/odysee-3.png" alt="">
<br>
<br>
So the output on your editor should look like this:
<br>
<br>
<code>{vembed 3=Mark-Passio-Interviewed-on-Authentic-Podcast-with-Henna-Maria-2020-11-02/5fce7e7de2bc16a0f7e9fbc17b4b2c285995f31c?r=5kVVM1BkLNRo2ZmMeDTnzn7YjcQabGMa}</code>
</p>
<br>
<h5>Brighteon</h5>
<p>For Brighteon all we need is the video ID:
<br>
https://www.brighteon.com/4a6800ff-e757-42f8-870c-621aab30ca6e
<br>
<img src="img/brighteon.png" alt="">
<br>
So the output on your editor with look like this:
<br>
<code>{vembed 4=4a6800ff-e757-42f8-870c-621aab30ca6e }</code>
</p>
<h5>Flote</h5>
<p>
  With Flote we need to extract the url from their embed code. So for example, this post I made:
  <br>
  https://flote.app/post/11b7fabb-0f47-4bc2-baa1-ff13a874b23e
  <br>
  First we need to click on this options button here:
  <br>
  <img src="img/flote.png" alt="">
<br>
Then click on "Copy embed code":
<br>
<img src="img/flote-2.png" alt="">
<br>
You are going to extract everything after <code>.com/</code> and before <code>'  allowfullscreen</code>
<br>
<img src="img/flote-3.png" alt="">
<br>
So the output on your edit should look like this:
<code>{vembed 5=9e2e9757-7891-4f1b-a495-22e5e20c4578/1b998c98-ebcd-42c4-b519-690f9357508b}</code>
</p>
<h5>Rumble</h5>
<p>For rumble we still need to extract it from their embed HTML but the url is a lot shorter</p>
<br>
https://rumble.com/vatjc7-orangutan-drinks-water-from-a-glass-like-a-human.html
<br>
First, click on the embed button:
<br>
<img src="img/rumble.png" alt="">
<br>
then copy everything after <code>embed/</code>:
<br>
<img src="img/rumble-2.png" alt="">
<br>
So the output on your editor should look like:
<br>
<code>{vembed 6=v87d5j/?pub=4}</code>

      <div class="span12"><hr /><br /></div>
     </div>

     <div class="row-fluid">
      <div class="span4">
      <?php echo JText::_('PLG_EDVEM_TYPE'); ?>
      </div>
      <div class="span8">
        <select name="edvemtype" id="edvemtype" class="input-block-level">
          <option value="Y">Youtube</option>
          <option value="T">Twitch</option>
          <option value="V">Vimeo</option>
          <option value="D">Dailymotion</option>
          <option value="l">Liveleak</option>
          <option value="b">BitChute</option>
          <option value="3">Odysee</option>
          <option value="4">Brighteon</option>
          <option value="5">Flote</option>
          <option value="6">Rumble</option>
          <option value="M">MP4</option>
        </select>
      </div>
     </div>

     <div class="row-fluid">
      <div class="span4">
      <?php echo JText::_('PLG_EDVEM_ID'); ?>
      </div>
      <div class="span8">
        <input class="input-block-level" id="edvemid" name="edvemid" value="" />
      </div>
     </div>

     <div class="row-fluid">
      <div class="span12"><br /></div>
     </div>

     <div class="row-fluid">
      <div class="span4">

      </div>
      <div class="span6">
      <a href="javascript:void(0)" onclick="javascript:insertTag();"  class="btn btn-success"><?php echo JText::_('PLG_EDVEM_LOS'); ?></a>
      </div>
     </div>


    </div>
    </form>

    </body>
</html>
