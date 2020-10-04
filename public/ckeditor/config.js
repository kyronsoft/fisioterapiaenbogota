/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
	// Define changes to default configuration here.
	// For complete reference see:
	// https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard', groups: ['clipboard', 'undo'] },
		{ name: 'editing', groups: ['find', 'selection', 'spellchecker'] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document', groups: ['mode', 'document', 'doctools'] },
		{ name: 'others' },
		{ name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
		{ name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi'] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
	config.height = 500;
	config.extraPlugins = 'embed';
	config.extraPlugins = 'embedbase';
	config.extraPlugins = 'dialog';
	config.extraPlugins = 'widget';
	config.extraPlugins = 'notificationaggregator';
	config.extraPlugins = 'dialogui';
	config.extraPlugins = 'lineutils';
	config.extraPlugins = 'clipboard';
	config.extraPlugins = 'toolbar';
	config.extraPlugins = 'button';
	config.extraPlugins = 'widgetselection';
	config.extraPlugins = 'notification';
	config.extraPlugins = 'autoembed';
	config.extraPlugins = 'autolink';
	config.extraPlugins = 'textmatch';
	config.extraPlugins = 'undo';
	config.extraPlugins = 'autogrow';
	config.autoGrow_minHeight = 200;
	config.autoGrow_maxHeight = 600;
	config.autoGrow_bottomSpace = 50;
	config.extraPlugins = 'youtube';
	config.youtube_width = '340';
	config.youtube_height = '280';
};
