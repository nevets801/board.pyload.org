<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

if (!defined("IN_ESOTALK")) exit;

/**
 * Default master view. Displays a HTML template with a header and footer.
 *
 * @package esoTalk
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='<?php echo T("charset", "utf-8"); ?>'>
<title><?php echo $data["pageTitle"]; ?></title>
<?php echo $data["head"]; ?>
</head>

<body class='<?php echo $data["bodyClass"]; ?>'>
<?php $this->trigger("pageStart"); ?>

<div id='messages'>
<?php foreach ($data["messages"] as $message): ?>
<div class='messageWrapper'>
<div class='message <?php echo $message["className"]; ?>' data-id='<?php echo @$message["id"]; ?>'><?php echo $message["message"]; ?></div>
</div>
<?php endforeach; ?>
</div>

<div id='wrapper'>

<div id="wrap">
<!-- HEADER -->
<!-- <div id="wrap"> -->
<header id="hdr" class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <div class="brand">
                <div class="logo"></div>
                <a class="title" href="http://betasite.pyload.org">pyLoad</a>
            </div>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="http://betasite.pyload.org/downloads">Download</a></li>
                    <li><a href="http://betasite.pyload.org/news">News</a></li>
                    <li><a href="http://betasite.pyload.org/wiki">Wiki</a></li>
                    <li><a href="http://betasite.pyload.org/development">Development</a></li>
                    <li class="active"><a href="/">Board</a></li>
                </ul>
            </div>

            <div id='hdr-inner' class="row-fluid">

                <?php if ($data["backButton"]): ?>
                    <a href='<?php echo $data["backButton"]["url"]; ?>' id='backButton' title='<?php echo T("Back to {$data["backButton"]["type"]}"); ?>'><i class="icon-circle-arrow-left"></i></a>
                <?php endif; ?>

                <ul id='mainMenu' class='menu'>
                    <?php if (!empty($data["mainMenuItems"])) echo $data["mainMenuItems"]; ?>
                </ul>

                <ul id='userMenu' class='menu'>
                    <?php echo $data["userMenuItems"]; ?>
                    <li><a href='<?php echo URL("conversation/start"); ?>' class='link-newConversation button'><?php echo T("New Conversation"); ?></a></li>
                </ul>

            </div>

        </div>
    </div>
</header>


<!-- BODY -->
<div id='body'>
<div id='body-content'>
<?php echo $data["content"]; ?>
</div>
</div>

<div id='ftr'>
    <div id='ftr-content'>
        <ul class='menu'>
            <li id='goToTop'><a href='#'><?php echo T("Go to top"); ?></a></li>
            <?php echo $data["metaMenuItems"]; ?>
            <?php if (!empty($data["statisticsMenuItems"])) echo $data["statisticsMenuItems"]; ?>
        </ul>
    </div>
</div>

</div>

<!-- FOOTER -->

<footer>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2 offset2">
                <div class="copyright">
                    © 2008-2013<br>
                    <a href="http://pyload.org/" target="_blank">The pyLoad Team</a><br>
                </div>
            </div>
            <div class="span2">
                <h2 class="block-title">Powered by</h2>
                <hr>
                Bootstrap<br>
                Backbone <br>
                Python<br>
            </div>
            <div class="span2">
                <h2 class="block-title">Community</h2>
                <hr>
                Docs<br>
                Forum<br>
                Webchat Chat<br>
            </div>

            <div class="span2">
                <h2 class="block-title">Development</h2>
                <hr>
                GitHub <br>
                Join Devs<br>
                Dev Chat<br>
            </div>
        </div>
    </div>
</footer>

<?php $this->trigger("pageEnd"); ?>
</div>

</body>
</html>