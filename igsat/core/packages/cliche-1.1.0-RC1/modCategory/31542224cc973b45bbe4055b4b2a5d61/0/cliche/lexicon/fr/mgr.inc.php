<?php
/**
 * Default Manager English Lexicon Entries for Cliche
 *
 * @package cliche
 * @subpackage lexicon
 */
 
$_lang['cliche.main_title'] = 'Cliche';

$_lang['cliche.breadcrumb_album_list_desc'] = '<h3>Liste d\'album</h3><p>Sélectionnez un album pour voir son contenu.</p>';
$_lang['cliche.breadcrumb_root'] = 'Liste d\'albums';
$_lang['cliche.breadcrumb_upload_images'] = 'Uploader des images';

$_lang['cliche.field_album_name_label'] = 'Nom d\'album (requis)';
$_lang['cliche.field_album_desc_label'] = 'Description';
$_lang['cliche.field_image_name_label'] = 'Nom d\'image (requis)';
$_lang['cliche.field_image_desc_label'] = 'Description';

$_lang['cliche.album_list_empty_msg'] = '<h4>Il n\'a aucun album de créé pour le moment</h4><p>Créez votre premier album en utilisant le bouton ci-dessous. Cliquez ensuite sur l\'objet nouvellement créé pour voir son contenu.<br/>Utilisez le fil d\'arianne pour naviguer au sein des albums (l\'élément actuellement vert n\'est pas cliquable)</p>';
$_lang['cliche.album_list_total_pics'] = '{total} images';

$_lang['cliche.album_desc'] = '<div class="album-iinfos"><tpl if="cover_id == 0">
		<span class="no-preview">Auncun aperçu</span>
	</tpl>
	<tpl if="cover_id">		
		<tpl if="thumbnail">
			<img src="{thumbnail}" title="Couverture pour l\'album {name}" alt="Image de couverture pour l\'album {name}" />
		</tpl>
		<tpl if="!thumbnail">
			<span class="no-preview error"><strong>Error</strong>Image not found</span>
		</tpl>
	</tpl>
	<div class="album-name"><h3>Album : <span>{name}</span></h3>
		Créé le <strong>{createdon}</strong> par <strong>{createdby}</strong><br/>
		Album id : #<strong>{id}</strong>
	</div>
	<div class="album-meta">
		<span>{total}</span>
		Images
	</div></div>
	<tpl if="description">
	</div><div class="album-desc"><p>{description}</p></tpl>';
$_lang['cliche.album_item_cover_alt_msg'] = '{name} aperçu';
$_lang['cliche.album_item_created_by'] = 'Créé par';
$_lang['cliche.album_item_created_on'] = 'Créé le';
$_lang['cliche.album_item_desc_title'] = 'Description';
$_lang['cliche.album_item_empty_msg'] = '<h4>Cet album ne comporte pas d\'image</h4><p>Ajoutez des images en cliquant sur le bouton vert « Ajouter des images »</p>';
$_lang['cliche.album_item_id'] = 'ID';
$_lang['cliche.album_item_informations_title'] = 'Informations';

$_lang['cliche.btn_add_album'] = 'Ajouter un album';
$_lang['cliche.btn_add_photo'] = 'Ajouter des images';
$_lang['cliche.btn_back_to_album_list'] = 'Retour à la liste d\'albums';
$_lang['cliche.btn_back_to_album'] = 'Retour à l\'album';
$_lang['cliche.btn_browse'] = 'Parcourir…';
$_lang['cliche.btn_delete_album'] = 'Supprimer l\'album';
$_lang['cliche.btn_delete_image'] = 'Supprimer l\'image';
$_lang['cliche.btn_edit_image'] = 'Éditer l\'image';
$_lang['cliche.btn_options'] = 'Options';
$_lang['cliche.btn_save_album'] = 'Enregister l\'album';
$_lang['cliche.btn_save_image'] = 'Enregister l\'image';
$_lang['cliche.btn_set_as_album_cover'] = 'Définir en tant que couverture d\'album';
$_lang['cliche.btn_start_upload'] = 'Démarrer l\'upload';
$_lang['cliche.btn_update_album'] = 'Mettre à jour l\'album';

$_lang['cliche.window_create_a_new_album'] = 'Créer un nouvel album';
$_lang['cliche.window_delete_album'] = 'Supprimer l\'album';
$_lang['cliche.window_delete_album_msg'] = 'Toutes les images de cet album seront également supprimées. Cette opération est irreversible.';
$_lang['cliche.window_delete_image'] = 'Supprimer l\'image';
$_lang['cliche.window_delete_image_msg'] = 'Êtes-vous sûr de vouloir supprimer cette image ? Cette opération est irreversible.';
$_lang['cliche.window_edit_image'] = 'Éditer votre image';
$_lang['cliche.window_edit_image_msg'] = 'Éditer les informations de vos images';
$_lang['cliche.window_set_as_album_cover'] = 'Définir en tant que couverture d\'album';
$_lang['cliche.window_set_as_album_cover_msg'] = 'Voulez-vous définir cette image comme couverture de l\'album ?';
$_lang['cliche.window_update_album'] = 'Mettre à jour l\'album actuel';

$_lang['cliche.upload_cancel_msg'] = 'Annuler';
$_lang['cliche.upload_desc'] = '<h4>Sélectionnez des fichiers depuis votre ordinateur</h4><p>Vous pouvez sélectionner plusieurs fichiers en même temps en maintenant la touche shift.</p>';
$_lang['cliche.upload_in_progress'] = 'Upload en cours…';
$_lang['cliche.upload_items_for'] = '<h3>Uploader d\'images</h3><p>Uploader de nouvelles images pour cet album <strong>';
$_lang['cliche.upload_ready_msg'] = 'Fichiers prêts à être uploadés :';
$_lang['cliche.upload_successful'] = 'Fichiers uploadés avec succès';

/* file uploader messages */
$_lang['cliche.album_id_error'] = '[Cliche] ID d\'album non indiqué';
$_lang['cliche.already_exist_error'] = '[Cliche] Le fichier existe déjà';
$_lang['cliche.create_temp_dir_error'] = '[Cliche] Impossible de créer le répertoire temporaire';
$_lang['cliche.empty_file_error'] = '[Cliche] Le fichier semble être vide : ';
$_lang['cliche.file_too_large_error'] = '[Cliche] Le fichier est trop volumineux';
$_lang['cliche.increase_post_max_size'] = '[Cliche] Augmentez post_max_size et upload_max_filesize à ';
$_lang['cliche.invalid_extensions_error'] = '[Cliche] Extension de fichier non valide, seules les extensions suivantes sont acceptées : ';
$_lang['cliche.misc_error'] = '[Cliche] Le fichier n\'a pu être uploadé';
$_lang['cliche.no_file_error'] = '[Cliche] Aucun fichier n\'a été uploadé';
$_lang['cliche.target_dir_error'] = '[Cliche] Impossible de créer le répertoire cible dans : ';
$_lang['cliche.target_dir_write_error'] = '[Cliche] Impossible d\'écrire dans le répertoire : ';
$_lang['cliche.uploadxhr_error'] = '[Cliche] Impossible de charger la classe UploadFileXhr';
$_lang['cliche.uploadfileform_error'] = '[Cliche] Impossible de charger la classe UploadFileForm depuis : ';
$_lang['cliche.xpdozip_not_found'] = '[Cliche] xPDOZip n\'a pu être chargé';
$_lang['cliche.zip_error_unpack'] = '[Cliche] Erreur lors de la décompression';

/* Common */
$_lang['cliche.album_empty_col_msg'] = 'Sélectionnez un objet depuis la colonne principale pour voir sa description';
$_lang['cliche.loading'] = '<div class="centered empty-msg">Chargement…</div>';
$_lang['cliche.no_desc'] = '<em>Aucune description</em>';
$_lang['cliche.no_preview'] = 'Aucun aperçu';
$_lang['cliche.saving_msg'] = 'Enregistrement, veuillez patienter…';