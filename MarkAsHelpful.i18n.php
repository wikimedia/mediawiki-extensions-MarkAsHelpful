<?php
/**
 * Internationalisation file for MarkAsHelpful extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Rob Moen
 */
$messages['en'] = array(
	'markashelpful-desc' => 'Provides a user interface to mark comments as helpful',
	'mah-mark-text' => 'Mark as helpful',
	'mah-you-marked-text' => 'You think this is helpful',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 thinks this is helpful}}',
	'mah-undo-mark-text' => 'undo',
	'mah-action-error' => 'There was an error performing this action',
	# 'right-markashelpful-view' => '', // FIXME: Please add a descriptive text for the user right
	# 'right-markashelpful-admin' => '', // FIXME: Please add a descriptive text for the user right
);

/** Message documentation (Message documentation)
 * @author Kaganer
 * @author Rob Moen
 */
$messages['qqq'] = array(
	'markashelpful-desc' => '{{desc}}
This is a feature in development. See [[mw:Extension:MarkAsHelpful]] for background information.',
	'mah-mark-text' => 'Text to prompt the user to mark this item as helpful',
	'mah-you-marked-text' => 'Text displayed to the logged in user if they mark an item helpful',
	'mah-someone-marked-text' => '$1 is the username that can be used for GENDER. $1 displays username who marked as helpful',
	'mah-undo-mark-text' => 'Text for the the undo mark link',
	'mah-action-error' => 'Generic error message',
);

/** Afrikaans (Afrikaans)
 * @author පසිඳු කාවින්ද
 */
$messages['af'] = array(
	'markashelpful-desc' => "Bied 'n gebruiker koppelvlak om kommentaar te merk as nuttige",
	'mah-mark-text' => 'Merk as nuttige',
	'mah-you-marked-text' => 'Jy dink dit is nuttig',
	'mah-undo-mark-text' => 'maak ongedaan',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'mah-undo-mark-text' => 'رجوع',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'markashelpful-desc' => "Ufre una interfaz d'usuariu pa marcar comentarios como útiles",
	'mah-mark-text' => 'Marcar como útil',
	'mah-you-marked-text' => "Pienses qu'esto ye útil",
	'mah-someone-marked-text' => "{{GENDER:$1|$1}} cree qu'esto ye útil",
	'mah-undo-mark-text' => 'esfacer',
	'mah-action-error' => 'Hebo un error al facer esta aición',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 */
$messages['ba'] = array(
	'mah-mark-text' => 'Файҙалы тип билдәләргә',
	'mah-you-marked-text' => 'Был комментарий файҙалы тип уйлайһығыҙ',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 файҙалы тип уйлай}}',
	'mah-undo-mark-text' => 'кире алырға',
);

/** Belarusian (Taraškievica orthography) (‪беларуская (тарашкевіца)‬)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'markashelpful-desc' => 'Надае магчымасьць пазначэньня карысных камэнтараў',
	'mah-mark-text' => 'Пазначыць як карыснае',
	'mah-you-marked-text' => 'Вы пазначылі гэта карысным',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 мяркуе, што гэта карысна}}',
	'mah-undo-mark-text' => 'скасаваць',
	'mah-action-error' => 'У час выкананьня дзеяньня адбылася памылка',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'markashelpful-desc' => 'Pourchas a ra un etrefas implijer evit merkañ an evezhiadennoù evel talvoudus',
	'mah-mark-text' => 'Merkañ evel talvoudus',
	'mah-you-marked-text' => "Soñjal a ra deoc'h ez eo talvoudus",
	'mah-someone-marked-text' => 'Soñjal a ra {{GENDER:$1|$1}} ez eo talvoudus',
	'mah-undo-mark-text' => 'dizober',
	'mah-action-error' => "Ur fazi a zo bet oc'h ober an obererezh-mañ",
);

/** Czech (česky)
 * @author Mormegil
 * @author Vks
 */
$messages['cs'] = array(
	'markashelpful-desc' => 'Poskytuje uživatelské rozhraní k označování komentářů jako užitečných',
	'mah-mark-text' => 'Označ jako užitečné',
	'mah-you-marked-text' => 'Toto považuju za užitečné',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 to považuje za užitečné}}',
	'mah-undo-mark-text' => 'zpět',
	'mah-action-error' => 'Při provádění této akce došlo k chybě',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Purodha
 */
$messages['de'] = array(
	'markashelpful-desc' => 'Ermöglicht das Markieren von Kommentaren als hilfreich',
	'mah-mark-text' => 'Als hilfreich markieren',
	'mah-you-marked-text' => 'Du meinst, dass dieser Kommentar hilfreich ist.',
	'mah-someone-marked-text' => '{{GENDER:$1|$1}} meint, dass dieser Kommentar hilfreich sei.',
	'mah-undo-mark-text' => 'rückgängig machen',
	'mah-action-error' => 'Beim Ausführen dieser Aktion ist ein Fehler aufgetreten.',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'mah-you-marked-text' => 'Sie meinen, dass dieser Kommentar hilfreich ist.',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'markashelpful-desc' => 'Staja wužywarski pówjerch k dispoziciji, aby se komentary ako pomocniwe markěrowali',
	'mah-mark-text' => 'Ako pomocniwe markěrowaś',
	'mah-you-marked-text' => 'Maš to za pomocniwe',
	'mah-someone-marked-text' => '{{GENDER:$1|$1}} ma to za pomoclnwe',
	'mah-undo-mark-text' => 'anulěrowaś',
	'mah-action-error' => 'Pśi wuwjeźenju akcije jo zmólka nastała',
);

/** Esperanto (Esperanto)
 * @author Blahma
 */
$messages['eo'] = array(
	'markashelpful-desc' => 'Provizas uzantointerfacon por marki komentojn utilaj',
	'mah-mark-text' => 'Marki kiel utilan',
	'mah-you-marked-text' => 'Vi opinias tion ĉi utila',
	'mah-someone-marked-text' => '$1 opinias tion ĉi utila',
	'mah-undo-mark-text' => 'malfari',
	'mah-action-error' => 'Okazis eraro dum plenumo de tiu ĉi ago',
);

/** Spanish (español)
 * @author Platonides
 */
$messages['es'] = array(
	'markashelpful-desc' => 'Proporciona una interfaz para indicar los comentarios que son útiles',
	'mah-mark-text' => 'Marcar como útil',
	'mah-you-marked-text' => 'Piensas que este comentario resulta útil.',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 piensa que este comentario resulta útil}}',
	'mah-undo-mark-text' => 'deshacer',
	'mah-action-error' => 'Se produjo un error al realizar esta acción',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'mah-undo-mark-text' => 'võta tagasi',
);

/** Persian (فارسی)
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'mah-mark-text' => 'علامت گذاری به عنوان مفید',
	'mah-you-marked-text' => 'شما فکر می‌کنید این مفید است',
	'mah-undo-mark-text' => 'خنثی‌سازی',
);

/** Finnish (suomi)
 * @author Nedergard
 */
$messages['fi'] = array(
	'markashelpful-desc' => 'Tarjoaa käyttöliittymän, jonka avulla kommentteja voidaan merkitä hyödyllisiksi',
	'mah-mark-text' => 'Merkitse hyödylliseksi',
	'mah-you-marked-text' => 'Omasta mielestäsi tämä on hyödyllinen',
	'mah-someone-marked-text' => '{{GENDER:$1|Käyttäjän $1 mielestä tämä on hyödyllinen}}',
	'mah-undo-mark-text' => 'kumoa',
	'mah-action-error' => 'Toiminnon suorittamisessa tapahtui virhe',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'markashelpful-desc' => 'Fournit une interface utilisateur pour marquer les commentaires comme utiles',
	'mah-mark-text' => 'Marquer comme utile',
	'mah-you-marked-text' => 'Vous pensez que ceci est utile',
	'mah-someone-marked-text' => '{{GENDER:$1|$1}} pense que cela est utile',
	'mah-undo-mark-text' => 'annuler',
	'mah-action-error' => 'Il y a eu une erreur en exécutant cette action',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'mah-mark-text' => 'Marcar coment utilo',
	'mah-you-marked-text' => 'Vos pensâd qu’o est utilo',
	'mah-someone-marked-text' => '{{GENDER:$1|$1}} pense qu’o est utilo',
	'mah-undo-mark-text' => 'dèfâre',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'markashelpful-desc' => 'Proporciona unha interface de usuario para marcar comentarios como útiles',
	'mah-mark-text' => 'Marcar isto como útil',
	'mah-you-marked-text' => 'Pensa que isto é útil',
	'mah-someone-marked-text' => '{{GENDER:$1|$1}} pensa que isto é útil',
	'mah-undo-mark-text' => 'desfacer',
	'mah-action-error' => 'Houbo un erro ao levar a cabo a acción',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'markashelpful-desc' => 'ממשק משתמש לסימון הערות כמועילות',
	'mah-mark-text' => 'סימון שההערה מועילה',
	'mah-you-marked-text' => 'לדעתך זה מועיל',
	'mah-someone-marked-text' => '$1 {{GENDER:$1|חושב|חושבת}} שזה מועיל',
	'mah-undo-mark-text' => 'ביטול',
	'mah-action-error' => 'אירעה שגיאה בעת ביצוע הפעולה הזאת',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 */
$messages['hi'] = array(
	'mah-mark-text' => 'सहायक चिन्हित करें',
	'mah-you-marked-text' => 'आप सोचते हैं ये सहायक है',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 ये सहायक लगता है}}',
	'mah-undo-mark-text' => 'पूर्ववत करें',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'markashelpful-desc' => 'Staja wužiwarski powjerch k dispoziciji, zo bychu so komentary jako pomocliwe markěrowali',
	'mah-mark-text' => 'Jako pomocliwy markěrować',
	'mah-you-marked-text' => 'Maš to za pomocliwe',
	'mah-someone-marked-text' => '{{GENDER:$1|$1}} ma to za pomocliwe',
	'mah-undo-mark-text' => 'cofnyć',
	'mah-action-error' => 'Při wuwjedźenju akcije je zmylk wustupił',
);

/** Hungarian (magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'markashelpful-desc' => 'Felhasználói felületet biztosít a hasznos megjegyzések megjelölésére',
	'mah-mark-text' => 'Hasznosnak jelölés',
	'mah-you-marked-text' => 'Szerinted hasznos',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 szerint hasznos}}',
	'mah-undo-mark-text' => 'visszavonás',
	'mah-action-error' => 'Hiba történt a művelet végrehajtása során',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'markashelpful-desc' => 'Forni un interfacie usator pro marcar commentos como utile',
	'mah-mark-text' => 'Marcar como utile',
	'mah-you-marked-text' => 'Tu pensa que isto es utile',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 pensa que isto es utile}}',
	'mah-undo-mark-text' => 'disfacer',
	'mah-action-error' => 'Un error occurreva durante le execution de iste action',
);

/** Italian (italiano)
 * @author Beta16
 * @author F. Cosoleto
 */
$messages['it'] = array(
	'markashelpful-desc' => "Fornisce un'interfaccia utente per contrassegnare i commenti come utili",
	'mah-mark-text' => 'Contrassegna come utile',
	'mah-you-marked-text' => 'Pensi che questo sia utile',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 pensa che questo è utile}}',
	'mah-undo-mark-text' => 'annulla',
	'mah-action-error' => "Si è verificato un errore nell'esecuzione di questa azione",
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'markashelpful-desc' => 'コメントに「役に立つ」の印を付けるユーザー インターフェイスを提供する',
	'mah-mark-text' => '役に立つの印を付ける',
	'mah-undo-mark-text' => '取り消し',
	'mah-action-error' => 'この操作の実行中にエラーが発生しました',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'markashelpful-desc' => 'Isi antarmuka panganggo kanggo nandhai tenggepan minangka migunani',
	'mah-mark-text' => 'Tandhai migunani',
	'mah-you-marked-text' => 'Sampéyan nganggep iki migunani',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 nganggep iki migunani}}',
	'mah-undo-mark-text' => 'batalaké',
	'mah-action-error' => 'Ana kasalahan nalika nglakokaké iki',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'mah-mark-text' => 'მონიშნეთ როგორც სასარგებლო',
	'mah-you-marked-text' => 'თქვენ ფიქრობთ, რომ ეს სასარგებლოა',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 ფიქრობს, რომ ეს სასარგებლოა}}',
	'mah-undo-mark-text' => 'გაუქმება',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'markashelpful-desc' => '유용한 의견을 표시하기 위한 사용자 인터페이스 제공',
	'mah-mark-text' => '유용한 것으로 표시',
	'mah-you-marked-text' => '당신은 이것이 유용하다고 생각합니다',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 사용자는 이것이 유용하다고 생각합니다}}',
	'mah-undo-mark-text' => '되돌리기',
	'mah-action-error' => '이 작업을 수행하는 도중 오류가 발생했습니다',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'markashelpful-desc' => 'Brängg_en Müjjeleschkeid_en et Wiki, öm övver Aanmärkonge ze saare, dat se helfe dääte.',
	'mah-mark-text' => 'Draach en, dat dat heh helfe däät.',
	'mah-you-marked-text' => 'Do meins, dat dat heh helfe däät.',
	'mah-someone-marked-text' => '{{GENDER:$1|Dä|Dat|Dä Metmaacher|De|Dat}} [[User:$1|$1]] meint, dat dat heh helfe däät.',
	'mah-undo-mark-text' => 'Zeröcknämme',
	'mah-action-error' => 'Ene Fähler es opjetrodde beim Ußföhre.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'markashelpful-desc' => 'E Benotzerinterface fir Bemierkungen als hëllefräich ze markéieren',
	'mah-mark-text' => 'Dëst als nëtzlech markéieren',
	'mah-you-marked-text' => 'Dir mengt datt dat nëtzlech ass',
	'mah-someone-marked-text' => '{{GENDER:$1|$1}} mengt, datt dës Bemierkung hëllefräich ass.',
	'mah-undo-mark-text' => 'réckgängeg maachen',
	'mah-action-error' => 'Et gouf e Feeler wéi dës Aktioun gemaach gouf',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'markashelpful-desc' => 'Овозможува кориснички посредник за означување на коментари како корисни (т.е. од помош)',
	'mah-mark-text' => 'Означете го ова како корисно',
	'mah-you-marked-text' => 'Сметате дека ова е корисно',
	'mah-someone-marked-text' => '{{GENDER:$1|$1}} смета дека ова е корисно',
	'mah-undo-mark-text' => 'врати',
	'mah-action-error' => 'Се појави грешка при извршувањето на дејството',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'mah-mark-text' => 'ഉപകാരപ്രദമെന്ന് അടയാളപ്പെടുത്തുക',
	'mah-you-marked-text' => 'ഇത് ഉപകാരപ്രദമാണെന്ന് താങ്കൾ കരുതുന്നു',
	'mah-someone-marked-text' => '{{GENDER:$1|ഇത് ഉപകാരപ്രദമാണെന്ന് $1 കരുതുന്നു}}',
	'mah-undo-mark-text' => 'പ്രവൃത്തി തിരസ്കരിക്കുക',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'markashelpful-desc' => 'Menyediakan antara muka pengguna untuk menandai komen sebagai membantu',
	'mah-mark-text' => 'Tanda sebagai membantu',
	'mah-you-marked-text' => 'Anda berpendapat bahawa ini membantu',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 berpendapat bahawa ini membantu}}',
	'mah-undo-mark-text' => 'buat asal',
	'mah-action-error' => 'Ralat terjadi ketika melakukan tindakan ini',
);

/** Norwegian Bokmål (‪norsk (bokmål)‬)
 * @author Event
 */
$messages['nb'] = array(
	'markashelpful-desc' => 'Gir et grensesnitt for å merke kommentarer som nyttige',
	'mah-mark-text' => 'Merk som nyttig',
	'mah-you-marked-text' => 'Du syns dette er nyttig',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 syns dette er nyttig}}',
	'mah-undo-mark-text' => 'angre',
	'mah-action-error' => 'Det oppsto en feil da handlingen skulle utføres',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'markashelpful-desc' => 'Biedt een gebruikersinterface om opmerkingen als nuttig te markeren',
	'mah-mark-text' => 'Als nuttig markeren',
	'mah-you-marked-text' => 'U denkt dat dit nuttig is',
	'mah-someone-marked-text' => '{{GENDER:$1|$1}} denkt dat dit nuttig is',
	'mah-undo-mark-text' => 'ongedaan maken',
	'mah-action-error' => 'Er is een fout opgetreden tijdens het uitvoeren van deze handeling',
);

/** Polish (polski)
 * @author Beau
 * @author Olgak85
 */
$messages['pl'] = array(
	'markashelpful-desc' => 'Udostępnia interfejs użytkownika do oznaczania komentarzy jako pomocne',
	'mah-mark-text' => 'Oznacz jako pomocne',
	'mah-you-marked-text' => 'Uważasz, że jest to pomocne.',
	'mah-someone-marked-text' => '$1 {{GENDER:$1|oznaczył|oznaczyła}} to jako pomocne',
	'mah-undo-mark-text' => 'Cofnij',
	'mah-action-error' => 'Wystąpił błąd podczas wykonywania tej akcji',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'markashelpful-desc' => "A dà n'antërfacia utent për marché ij coment com ùtij",
	'mah-mark-text' => 'Marca com ùtil',
	'mah-you-marked-text' => 'It pense che sòn a sia ùtil',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 a pensa che sòn a sia ùtil}}',
	'mah-undo-mark-text' => "buta 'me ch'a l'era",
	'mah-action-error' => "A-i é staje n'eror an fasend st'assion",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'mah-undo-mark-text' => 'ناکړل',
);

/** Romanian (română)
 * @author Firilacroco
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'mah-mark-text' => 'Marcați ca util',
	'mah-you-marked-text' => 'Credeți că acest lucru este util',
	'mah-undo-mark-text' => 'anulare',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'mah-mark-text' => 'Signe cumme utile',
	'mah-you-marked-text' => 'Tu pinze ca jè utile',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 penze ca jè utile}}',
	'mah-undo-mark-text' => 'annulle',
	'mah-action-error' => "S'ha verificate 'n'errore facenne st'azione",
);

/** Russian (русский)
 * @author DR
 * @author Kaganer
 */
$messages['ru'] = array(
	'markashelpful-desc' => 'Предоставляет пользовательский интерфейс для пометки комментариев как полезных',
	'mah-mark-text' => 'Отметить как полезное',
	'mah-you-marked-text' => 'Вы считаете, что этот комментарий полезен',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 считает это полезным}}',
	'mah-undo-mark-text' => 'отменить',
	'mah-action-error' => 'Произошла ошибка при выполнении этого действия',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'mah-mark-text' => 'ප්‍රයෝජනවත් ලෙස සලකුණු කරන්න',
	'mah-you-marked-text' => 'ඔබ සිතනවා මෙය ප්‍රයෝජනවත් කියා',
	'mah-undo-mark-text' => 'අහෝසිය',
);

/** Slovenian (slovenščina)
 * @author Yerpo
 */
$messages['sl'] = array(
	'markashelpful-desc' => 'Vzpostavi uporabniški vmesnik za označevanje komentarjev kot koristne',
	'mah-mark-text' => 'Označi kot koristno',
	'mah-you-marked-text' => 'Po vašem mnenju je to koristno',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 meni, da je to koristno}}',
	'mah-undo-mark-text' => 'razveljavi',
	'mah-action-error' => 'Pri izvajanju dejanja je prišlo do napake',
);

/** Serbian (Cyrillic script) (‪српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'markashelpful-desc' => 'Пружа корисничко окружење за означавање коментара као корисних (тј. од помоћи)',
	'mah-mark-text' => 'Означи као корисно',
	'mah-you-marked-text' => 'Сматрате да је ово корисно',
	'mah-someone-marked-text' => '{{GENDER:$1|$1}} мисли да је ово корисно',
	'mah-undo-mark-text' => 'врати',
	'mah-action-error' => 'Дошло је до грешке при извршавању ове радње',
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'mah-mark-text' => 'Markera som användbar',
	'mah-you-marked-text' => 'Du tycker att detta är användbart',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 tycker att detta är användbart}}',
	'mah-undo-mark-text' => 'ångra',
	'mah-action-error' => 'Det uppstod ett fel när denna åtgärd skulle utföras',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'markashelpful-desc' => 'கருத்துரைகளை உதவுபவை எனக் குறிக்க ஒரு பயனர் இடைமுகத்தை வழங்குகிறது',
	'mah-mark-text' => 'உதவியானதாய்க் குறித்துக்  கொள்',
	'mah-you-marked-text' => 'நீங்கள் இதை உதவியானதாய்க் கருதுகின்றீர்கள்.',
	'mah-undo-mark-text' => 'செயல்தவிர்',
	'mah-action-error' => 'இதைச் செயலாக்குவதில் ஒரு பிழை ஏற்பட்டது',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'markashelpful-desc' => 'Nagbibigay ng isang ugnayang-mukha ng tagagamit upang mamarkahan ang mga pagpuna bilang nakakatulong',
	'mah-mark-text' => 'Markahan bilang nakakatulong',
	'mah-you-marked-text' => 'Sa tingin mo ay nakakatulong ito',
	'mah-someone-marked-text' => '{{GENDER:$1|Iniisip ni $1 na ito ay nakakatulong}}',
	'mah-undo-mark-text' => 'huwag nang isagawa',
	'mah-action-error' => 'Nagkaroon ng kamalian sa pagsasagawa ng kilos na ito.',
);

/** Ukrainian (українська)
 * @author A1
 * @author Тест
 */
$messages['uk'] = array(
	'markashelpful-desc' => 'Надає інтерфейс користувача для позначання корисних коментарів',
	'mah-mark-text' => 'Позначити як корисне',
	'mah-you-marked-text' => 'Ви вважаєте, що це корисне',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 вважають це корисним}}',
	'mah-undo-mark-text' => 'скасувати',
	'mah-action-error' => 'Не вдалося виконати дію',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'mah-undo-mark-text' => 'استرجع',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'markashelpful-desc' => 'Cung cấp giao diện cho phép đánh dấu bình luận là hữu ích',
	'mah-mark-text' => 'Đanh dấu là hữu ích',
	'mah-you-marked-text' => 'Bạn coi mục này là hữu ích',
	'mah-someone-marked-text' => '$1 coi mục này là hữu ích',
	'mah-undo-mark-text' => 'hoàn tác',
	'mah-action-error' => 'Có lỗi khi thực hiện tác vụ này',
);

/** Yiddish (ייִדיש)
 * @author Imre
 */
$messages['yi'] = array(
	'mah-undo-mark-text' => 'אַנולירן',
);

/** Simplified Chinese (‪中文（简体）‬)
 * @author Anakmalaysia
 * @author Yanmiao liu
 */
$messages['zh-hans'] = array(
	'markashelpful-desc' => '提供用户界面标记评论为有帮助',
	'mah-mark-text' => '标记为有帮助',
	'mah-you-marked-text' => '您认为有帮助',
	'mah-someone-marked-text' => '{{GENDER:$1|$1 认为有帮助}}',
	'mah-undo-mark-text' => '撤销',
	'mah-action-error' => '执行此操作中出错',
);

/** Traditional Chinese (‪中文（繁體）‬)
 * @author Anakmalaysia
 */
$messages['zh-hant'] = array(
	'markashelpful-desc' => '提供用戶界面標記評論為有幫助',
	'mah-mark-text' => '標記為有幫助',
	'mah-you-marked-text' => '您認為有幫助',
	'mah-someone-marked-text' => '{{GENDER:$1|$1認為有幫助}}',
	'mah-undo-mark-text' => '撤銷',
	'mah-action-error' => '執行此操作中出錯',
);

