<?php

wp_enqueue_style( 'rest-api-console', plugins_url( 'build/style.min.css', WP_API_Console::$path ) );
wp_enqueue_script( 'rest-api-console', plugins_url( 'build/app.min.js', WP_API_Console::$path ) );
wp_localize_script( 'rest-api-console', 'console_search_url', plugins_url( 'search.js', WP_API_Console::$path ) );

iframe_header();

?>
    <!--
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Inconsolata:400,700|Open+Sans:300italic,400italic,600italic,400,300,600">
    -->
    <div id="path">
        <div id="auth" tabindex="2"></div>
        <div id="versions"></div>
        <div id="lookup-container">
            <div id="method"></div>
            <div id="parts"></div>
            <div id="search"><a></a></div>
            <div id="lookup"></div>
        </div>
        <div id="submit" tabindex="1"></div>
    </div>
    <section id="builder">
        <section id="parameters">
            <div id="query"></div>
            <div id="body" class="disabled"></div>
        </section>
        <section id="reference"></section>
    </section>
    <section id="requests"></section>
    <div id="tip">
        <div class="anchor"></div>
        <header>
            <code></code>
            <em></em>
        </header>
        <ul>
        </ul>
    </div>

<?php
iframe_footer();
?>