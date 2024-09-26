<?php

return [
	'plugin_upload' => [
		'menu' => 'ZIP Dosyasından Yükle',
		'title' => 'ZIP Dosyasından Eklenti Yükle',
		'description' => "Bir eklentiyi :link veya diğer kaynaklardan indirdiğiniz <code>.zip</code> dosya biçiminde yükleyebilirsiniz. Lütfen eklentileri yüklerken dikkatli olun, çünkü bunlar web sitenize zarar verebilecek kötü amaçlı kodlar içerebilir.",
		'upload_and_install' => 'Yükle ve Kur',
		'input_file_description' => 'Dosyanın <code>.zip</code> biçiminde geçerli bir dosya olduğundan emin olun.',
		'installed_message' => ' :file yüklendi ve :name eklentisi başarıyla yüklendi.',
		'plugin_information' => [
			'title' => 'Eklenti Bilgileri',
			'id' => 'ID',
			'name' => 'Ad',
			'description' => 'Açıklama',
			'author' => 'Yazar',
			'version' => 'Sürüm',
			'minimum_core_version' => 'Minimum Çekirdek Sürümü',
		],
		'plugin_id_conflict' => 'Farklı kimliğe sahip eklenti adı çakışması',
		'plugin_already_installed' => 'Bu eklenti zaten kurulu.',
		'plugin_available_update' => 'Eklenti başarıyla kuruldu. Ayrıca, bu eklenti için bir güncelleme mevcut.',
		'current' => 'Geçerli',
		'uploaded' => 'Yüklendi',
		'activate_plugin' => 'Eklentiyi etkinleştir',
		'update_plugin' => 'Eklentiyi güncelle',
		'back' => 'Geri',
		'validation' => [
			'could_not_find_plugin_file' => 'Zip dosyanızda eklenti dosyası bulunamadı.',
			'invalid_plugin_file' => 'Eklenti zip dosyanızdaki plugin.json dosyası geçerli değil.',
		],
	],
];