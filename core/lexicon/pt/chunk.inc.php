<?php
/**
 * Chunk English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */

// Entry out of alpha order because it must come before the entry it's used in below
$_lang['example_tag_chunk_name'] = 'NameOfChunk';

$_lang['chunk'] = 'Chunck';
$_lang['chunk_category_desc'] = 'Use to group Chunks within the Elements tree.';
$_lang['chunk_code'] = 'Chunk Code (HTML)';
$_lang['chunk_description_desc'] = 'Usage information for this Chunk shown in search results and as a tooltip in the Elements tree.';
$_lang['chunk_delete_confirm'] = 'Você tem certeza que deseja excluir este chunk?';
$_lang['chunk_duplicate_confirm'] = 'Você tem certeza que deseja duplicar este chunk?';
$_lang['chunk_err_create'] = 'An error occurred while trying to create the chunk.';
$_lang['chunk_err_duplicate'] = 'Erro ao duplicar chunk.';
$_lang['chunk_err_ae'] = 'Já existe um chunk com o nome "[[+name]]".';
$_lang['chunk_err_invalid_name'] = 'O nome do Chunk é inválido.';
$_lang['chunk_err_locked'] = 'Chunk está trancado.';
$_lang['chunk_err_remove'] = 'An error occurred while trying to delete the chunk.';
$_lang['chunk_err_save'] = 'Um erro ocorreu na tentativa de salvar este chunk.';
$_lang['chunk_err_nf'] = 'Chunk não encontrado!';
$_lang['chunk_err_nfs'] = 'Chunk não encontrado com id: [[+id]]';
$_lang['chunk_err_ns'] = 'Chunk não especificado.';
$_lang['chunk_err_ns_name'] = 'Por favor especifique um nome.';
$_lang['chunk_lock'] = 'Trancar chunk para edição';
$_lang['chunk_lock_desc'] = 'Only users with “edit_locked” permissions can edit this Chunk.';
$_lang['chunk_name_desc'] = 'Place the content generated by this Chunk in a Resource, Template, or other Chunk using the following MODX tag: [[+tag]]';
$_lang['chunk_new'] = 'Criar Chunk';
$_lang['chunk_properties'] = 'Propriedades Padrão';
$_lang['chunk_tab_general_desc'] = 'Aqui você pode inserir os atributos básicos para este <em>Chunk</em> bem como seu conteúdo. O conteúdo deve ser HTML, seja no campo <em>Chunk Code</em> abaixo ou em um arquivo externo estático, e pode incluir tags MODX. Nota: Nenhum código PHP será executado neste elemento.';
$_lang['chunk_tag_copied'] = 'Chunk tag copied!';
$_lang['chunks'] = 'Chuncks';

// Temporarily match old keys to new ones to ensure compatibility
// --fields
$_lang['chunk_desc_category'] = $_lang['chunk_category_desc'];
$_lang['chunk_desc_description'] = $_lang['chunk_description_desc'];
$_lang['chunk_desc_name'] = $_lang['chunk_name_desc'];
$_lang['chunk_lock_msg'] = $_lang['chunk_lock_desc'];

// --tabs
$_lang['chunk_msg'] = $_lang['chunk_tab_general_desc'];
