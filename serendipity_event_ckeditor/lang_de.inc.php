<?php # 

/**
 *  @file lang_de.inc.php 1.4.9 2014-09-03 Ian
 *  @version 1.4.9
 *  @author Translator Name <yourmail@example.com>
 *  DE-Revision: Revision of lang_de.inc.php
 */

@define('PLUGIN_EVENT_CKEDITOR_NAME', 'CKEditor');
@define('PLUGIN_EVENT_CKEDITOR_DESC', 'Nutzt CKEditor als den Standard WYSIWYG Editor. Dieser ist zur Zeit der state-of-the-art Editor im Internet. Benutzung: Empfohlen! Nach der Installation, lies die Plugin Konfigurations Seite f�r weitere Informationen.');
@define('PLUGIN_EVENT_CKEDITOR_REVISION_TITLE', '<h3>Das Plugin enth�lt:</h3>');
@define('PLUGIN_EVENT_CKEDITOR_INSTALL', '<h2>Installation</h2>
<div class="msg_notice">
    <p><span class="icon-attention"></span> <strong>Abh�ngigkeiten:</strong> Deaktiviere body, extended und nugget global im <strong>NL2BR</strong> Plugin, <strong>oder</strong> per entry �ber das entryproperties plugin event <strong>und/oder</strong> f�r statische Seiten �ber die Entry "Textformatierungs" Option!</p>
</div>
<ol style="line-height: 1.6">
    <li>Um anderen Plugins Zugriff auf das Plugin oder dessen Hook zu gew�hren, plaziere das (CKEditor) Plugin nahe dem Ende deiner Pluginliste.</li>
    <li>Versichere dich, dass der WYSIWYG Modus in den "Eigenen Einstellungen" eingeschaltet ist.</li>
</ol>
<div class="cke_config_block msg_dialogue">
    <h3>Manuelle Erweiterungen mit anderen CKEDITOR Plugins</h3>
    <ol style="line-height: 1.6">
        <li>Definiere manuell hinzugef�gte Plugins (analog zu <em>{ name: \'mediaembed\' },</em>) in der custom cke_config.js, in der <em>CKEDITOR.config.toolbarGroups = [...]</em> Definition.</li>
        <li>Au�erdem f�ge den neuen Pluginnamen (analog zu mediaembed) der <em>var extraPluginList = \'...\'</em> Definition in der cke_plugin.js Datei hinzu.</li>
    </ol>

    <h3>Upgrading</h3>
    <p>Dieses Plugin wird von Zeit zu Zeit selber Updates via Spartacus bereitstellen.<hr>Wenn jemals ein manuelles oder pers�nliches Update des mitgelieferten CKEditor Paketes ben�tigt wird:</p>
    <ol style="line-height: 1.6">
        <li><a href="http://ckeditor.com/download" target="_blank">Download CKEditor</a></li>
        <li>Extrahiere nach: <em>' . realpath(dirname(__FILE__) . '/..') . '</em> (dies sollte das <em>"ckeditor"</em> Sub-Verzeichnis automatisch erstellen)</li>
    </ol>
</div>');
@define('PLUGIN_EVENT_CKEDITOR_CONFIG', '');
@define('PLUGIN_EVENT_CKEDITOR_INSTALL_PLUGPATH', 'HTTP Pfad des S9y Plugins Verzeichnisses');
@define('PLUGIN_EVENT_CKEDITOR_CKEACF_OPTION', 'Stelle Advanced-Content-Filter (ACF) ab?');
@define('PLUGIN_EVENT_CKEDITOR_TOOLBAR_OPTION', 'Nutze den (default) 2-Zeiler toolbar-group Umbruch?');

@define('PLUGIN_EVENT_CKEDITOR_CODEBUTTON_OPTION', 'Nutze "code toolbar button"?');
@define('PLUGIN_EVENT_CKEDITOR_PRETTIFY_OPTION', 'Nutze "prettify code" im Frontend?');
@define('PLUGIN_EVENT_CKEDITOR_PRETTIFY_OPTION_BLAHBLAH', 'Erweitert "code toolbar button" Option, um lokal geladene prettify.js und prettify.ccs Dateien im Frontend. (Apache License v. 2.0)');
@define('PLUGIN_EVENT_CKEDITOR_OPTION_BLAHBLAH', 'Normalerweise: ');

@define('PLUGIN_EVENT_CKEDITOR_FORCEINSTALL_OPTION', 'Entpacke Zip Datei (im Notfall)');
@define('PLUGIN_EVENT_CKEDITOR_FORCEINSTALL_OPTION_BLAHBLAH', 'Nur bei upgrade Fehlern: Entpacke augenblicklich die mitgelieferte ');

@define('PLUGIN_EVENT_CKEDITOR_CKEACF_OPTION_BLAHBLAH', 'Dieser CKEDITOR "Housekeeper" Filter erlaubt nur bestimmtes Markup. Normalerweise ist dies gut und sollte als Einstellung erhalten bleiben, da es bereits eingebaute Workarounds f�r auff�lliges Markup, zB. "iframe" Video-Media via den "Embed Media"-Knopf, oder "audio" und "andere Serendipity" tags via "Quellcode"-Anzeige, gibt. Bitte lese dazu auch: "http://docs.ckeditor.com/?_escaped_fragment_=/guide/dev_advanced_content_filter#!/guide/dev_advanced_content_filter".');
