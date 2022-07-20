<?php

declare(strict_types=1);

/**
 * ID-Revision: 08.Dec.2013
 */
return [
    // Laminas\I18n\Validator\Alnum
    "Invalid type given. String, integer or float expected" => "Tipe yang diberikan tidak valid. Diharapkan String, integer, atau float",
    "The input contains characters which are non alphabetic and no digits" => "Isian berisi karakter yang non abjad dan tidak ada angka",
    "The input is an empty string" => "Isian adalah string kosong",

    // Laminas\I18n\Validator\Alpha
    "Invalid type given. String expected" => "Tipe yang diberikan tidak valid. Diharapkan string",
    "The input contains non alphabetic characters" => "Isian berisi karakter non abjad",

    // Laminas\I18n\Validator\DateTime
    "The input does not appear to be a valid datetime" => "Isian tidak tampak sebagai datetime yang valid",

    // Laminas\I18n\Validator\IsFloat
    "The input does not appear to be a float" => "Isian tidak tampak sebagai float",

    // Laminas\I18n\Validator\IsInt
    "Invalid type given. String or integer expected" => "Tipe yang diberikan tidak valid. Diharapkan string atau integer",
    "The input does not appear to be an integer" => "Isian tidak tampak sebagai integer",

    // Laminas\I18n\Validator\PhoneNumber
    "The input does not match a phone number format" => "Isian tidak cocok dengan format nomor telepon",
    "The country provided is currently unsupported" => "Negara yang diisikan saat ini tidak didukung",

    // Laminas\I18n\Validator\PostCode
    "The input does not appear to be a postal code" => "Isian tidak tampak sebagai kode pos",
    "An exception has been raised while validating the input" => "Eksepsi muncul pada saat memvalidasi isian",

    // Laminas\Validator\Barcode
    "The input failed checksum validation" => "Isian gagal memvalidasi checksum",
    "The input contains invalid characters" => "Isian mengandung karakter yang tidak valid",
    "The input should have a length of %length% characters" => "Isian harus memiliki panjang panjang %length% karakter",

    // Laminas\Validator\Between
    "The input is not between '%min%' and '%max%', inclusively" => "Isian tidak berada di antara '%min%' and '%max%', inklusif",
    "The input is not strictly between '%min%' and '%max%'" => "Isian tidak ketat berada di antara '%min%' dan '%max%'",

    // Laminas\Validator\Callback
    "The input is not valid" => "Isian tidak valid",
    "An exception has been raised within the callback" => "Eksepsi muncul dalam callback",

    // Laminas\Validator\CreditCard
    "The input seems to contain an invalid checksum" => "Isian tampaknya mengandung checksum yang tidak valid",
    "The input must contain only digits" => "Isian harus berisi angka saja",
    "The input contains an invalid amount of digits" => "Isian berisi jumlah digit yang tidak valid",
    "The input is not from an allowed institute" => "Isian tidak berasal dari lembaga yang diperbolehkan",
    "The input seems to be an invalid credit card number" => "Isian tampaknya nomor kartu kredit yang tidak valid",

    // Laminas\Validator\Csrf
    "The form submitted did not originate from the expected site" => "Form yang disubmit tidak berasal dari situs yang diharapkan",

    // Laminas\Validator\Date
    "Invalid type given. String, integer, array or DateTime expected" => "Tipe yang diberikan tidak valid. Diharapkan String, integer, array, atau DateTime",
    "The input does not appear to be a valid date" => "Isian tidak tampak sebagai tanggal yang valid",
    "The input does not fit the date format '%format%'" => "Isian tidak sesuai dengan format tangal '%format%'",

    // Laminas\Validator\DateStep
    "The input is not a valid step" => "Isian bukan langkah yang valid",

    // Laminas\Validator\Db\AbstractDb
    "No record matching the input was found" => "Tidak ada catatan pencocokan isian yang ditemukan",
    "A record matching the input was found" => "Sebuah catatan pencocokan isian ditemukan",

    // Laminas\Validator\Digits

    // Laminas\Validator\EmailAddress
    "The input is not a valid email address. Use the basic format local-part@hostname" => "Isian bukan alamat email yang valid. Gunakan format bagian-lokal@hostname",
    "'%hostname%' is not a valid hostname for the email address" => "'%hostname%' adalah hostname yang tidak valid untuk alamat email",
    "'%hostname%' does not appear to have any valid MX or A records for the email address" => "'%hostname%' tidak tampak untuk memiliki MX atau A records yang valid untuk alamat email",
    "'%hostname%' is not in a routable network segment. The email address should not be resolved from public network" => "'%hostname%' tidak dalam segment jaringan yang terjangkau. alamat email seharusnya dapat dicapai oleh jaringan publik",
    "'%localPart%' can not be matched against dot-atom format" => "'%localPart%' tidak dapat dicocokkan dengan format dot-atom",
    "'%localPart%' can not be matched against quoted-string format" => "'%localPart%' tidak dapat dicocokkan dengan format quoted-string",
    "'%localPart%' is not a valid local part for the email address" => "'%localPart%' adalah bagian local yang tidak valid untuk email address",
    "The input exceeds the allowed length" => "Isian melebihi panjang yang diperbolehkan",

    // Laminas\Validator\Explode
    "Invalid type given" => "Tipe yang diberikan tidak valid",

    // Laminas\Validator\File\Count
    "Too many files, maximum '%max%' are allowed but '%count%' are given" => "Terlalu banyak berkas, maksimal '%max%' diperbolehkan tetapi '%count%' diberikan",
    "Too few files, minimum '%min%' are expected but '%count%' are given" => "Terlalu sedikit berkas, minimal '%min%' diperbolehkan tetapi '%count%' diberikan",

    // Laminas\Validator\File\Crc32
    "File does not match the given crc32 hashes" => "Berkas tidak cocok dengan hash crc32 diberikan",
    "A crc32 hash could not be evaluated for the given file" => "Sebuah hash crc32 tidak dapat dievaluasi untuk berkas yang diberikan",
    "File is not readable or does not exist" => "Berkas tidak terbaca atau tidak ada",

    // Laminas\Validator\File\ExcludeExtension
    "File has an incorrect extension" => "Ekstensi berkas salah",

    // Laminas\Validator\File\Exists
    "File does not exist" => "Berkas tidak ada",

    // Laminas\Validator\File\Extension

    // Laminas\Validator\File\FilesSize
    "All files in sum should have a maximum size of '%max%' but '%size%' were detected" => "Semua berkas yang dijumlahkan harus memiliki ukuran maksimal '%max%' tapi ukuran '%size%' terdeteksi",
    "All files in sum should have a minimum size of '%min%' but '%size%' were detected" => "Semua berkas yang dijumlahkan harus memiliki ukuran minimal '%min%' tapi ukuran '%size%' terdeteksi",
    "One or more files can not be read" => "Satu atau beberapa berkas tidak dapat dibaca",

    // Laminas\Validator\File\Hash
    "File does not match the given hashes" => "Berkas tidak cocok dengan hash yang diberikan",
    "A hash could not be evaluated for the given file" => "Sebuah hash tidak dapat dievaluasi untuk berkas yang diberikan",

    // Laminas\Validator\File\ImageSize
    "Maximum allowed width for image should be '%maxwidth%' but '%width%' detected" => "Lebar maksimal yang diharapkan untuk gambar seharusnya '%maxwidth%' tetapi '%width%' terdeteksi",
    "Minimum expected width for image should be '%minwidth%' but '%width%' detected" => "Lebar minimal yang diharapkan untuk gambar seharusnya '%minwidth%' tetapi '%width%' terdeteksi",
    "Maximum allowed height for image should be '%maxheight%' but '%height%' detected" => "Tinggi maksimal yang diharapkan untuk gambar seharusnya '%maxheight%' tetapi '%height%' terdeteksi",
    "Minimum expected height for image should be '%minheight%' but '%height%' detected" => "Tinggi minimal yang diharapkan untuk gambar seharusnya '%minheight%' tetapi '%height%' terdeteksi",
    "The size of image could not be detected" => "Ukuran gambar tidak dapat terdeteksi",

    // Laminas\Validator\File\IsCompressed
    "File is not compressed, '%type%' detected" => "Bukan berkas terkompresi, '%type%' terdeteksi",
    "The mimetype could not be detected from the file" => "Mimetype tidak dapat terdeteksi dari berkas",

    // Laminas\Validator\File\IsImage
    "File is no image, '%type%' detected" => "Berkas bukan gambar, '%type%' terdeteksi",

    // Laminas\Validator\File\Md5
    "File does not match the given md5 hashes" => "Berkas tidak cocok dengan hash md5 diberikan",
    "An md5 hash could not be evaluated for the given file" => "Md5 hash tidak dapat dievaluasi dari berkas yang diberikan",

    // Laminas\Validator\File\MimeType
    "File has an incorrect mimetype of '%type%'" => "Berkas mempunyai mimetype yang tidak cocok dengan '%type%'",

    // Laminas\Validator\File\NotExists

    // Laminas\Validator\File\Sha1
    "File does not match the given sha1 hashes" => "Berkas tidak cocok dengan hash sha1 diberikan",
    "A sha1 hash could not be evaluated for the given file" => "Sebuah hash sha1 tidak dapat dievaluasi untuk berkas yang diberikan",

    // Laminas\Validator\File\Size
    "Maximum allowed size for file is '%max%' but '%size%' detected" => "Ukuran maksimal yang diharapkan adalah '%min%' tetapi '%size%' terdeteksi",
    "Minimum expected size for file is '%min%' but '%size%' detected" => "Ukuran minimal yang diharapkan adalah '%min%' tetapi '%size%' terdeteksi",

    // Laminas\Validator\File\Upload
    "File '%value%' exceeds the defined ini size" => "Berkas '%value%' melebihi ukuran ini yang didefinisikan",
    "File '%value%' exceeds the defined form size" => "Berkas '%value%' melebihi ukuran form yang didefinisikan",
    "File '%value%' was only partially uploaded" => "Berkas '%value%' hanya sebagian terupload",
    "File '%value%' was not uploaded" => "Berkas '%value%' tidak dapat terupload",
    "No temporary directory was found for file '%value%'" => "Tidak ada direktori sementara yang ditemukan untuk berkas '%value%'",
    "File '%value%' can't be written" => "Berkas '%value%' tidak dapat ditulis",
    "A PHP extension returned an error while uploading the file '%value%'" => "Ekstensi PHP mengembalikan galat pada saat upload berkas '%value%'",
    "File '%value%' was illegally uploaded. This could be a possible attack" => "Berkas '%value%' secara ilegal diunggah. Hal ini bisa menjadi kemungkinan serangan",
    "File '%value%' was not found" => "Berkas '%value%' tidak ditemukan",
    "Unknown error while uploading file '%value%'" => "Galat tidak diketahui pada saat proses mengupload berkas '%value%'",

    // Laminas\Validator\File\UploadFile
    "File exceeds the defined ini size" => "Berkas melebihi ukuran ini yang didefinisikan",
    "File exceeds the defined form size" => "Berkas melebihi ukuran form yang didefinisikan",
    "File was only partially uploaded" => "Berkas hanya sebagian terupload",
    "File was not uploaded" => "Berkas tidak dapat terupload",
    "No temporary directory was found for file" => "Tidak ada direktori sementara yang ditemukan untuk berkas",
    "File can't be written" => "Berkas tidak dapat ditulis",
    "A PHP extension returned an error while uploading the file" => "Ekstensi PHP mengembalikan galat pada saat upload berkas",
    "File was illegally uploaded. This could be a possible attack" => "Berkas secara ilegal diunggah. Hal ini bisa menjadi kemungkinan serangan",
    "File was not found" => "Berkas tidak ditemukan",
    "Unknown error while uploading file" => "Galat tidak diketahui pada saat unggah berkas",

    // Laminas\Validator\File\WordCount
    "Too many words, maximum '%max%' are allowed but '%count%' were counted" => "Terlalu banyak kata, maksimal '%min%' diharapkan tetapi '%count%' terdeteksi",
    "Too few words, minimum '%min%' are expected but '%count%' were counted" => "Terlalu sedikit kata, minimal '%min%' diharapkan tetapi '%count%' terdeteksi",

    // Laminas\Validator\GreaterThan
    "The input is not greater than '%min%'" => "Isian tidak lebih besar dari '%min%'",
    "The input is not greater than or equal to '%min%'" => "Isian tidak lebih besar atau sama dengan '%min%'",

    // Laminas\Validator\Hex
    "The input contains non-hexadecimal characters" => "Isian berisi karakter non-heksadesimal",

    // Laminas\Validator\Hostname
    "The input appears to be a DNS hostname but the given punycode notation cannot be decoded" => "Isian tampaknya menjadi nama host DNS tetapi notasi punycode diberikan tidak dapat diterjemahkan",
    "The input appears to be a DNS hostname but contains a dash in an invalid position" => "Isian tampaknya menjadi nama host DNS tetapi berisi dash dalam posisi yang tidak valid",
    "The input does not match the expected structure for a DNS hostname" => "Isian tidak cocok dengan struktur untuk hostname DNS yang diharapkan",
    "The input appears to be a DNS hostname but cannot match against hostname schema for TLD '%tld%'" => "Isian tampaknya berupa hostname DNS tetapi tidak dapat cocok dengan skema hostname untuk TLD '%tld%'",
    "The input does not appear to be a valid local network name" => "Isian tidak tampak sebagai nama jaringan lokal yang diperbolehkan",
    "The input does not appear to be a valid URI hostname" => "Isian tidak tampak sebagai hostname URI yang valid",
    "The input appears to be an IP address, but IP addresses are not allowed" => "Isian tampaknya berupa IP address, tetapi IP Address tidak diperbolehkan",
    "The input appears to be a local network name but local network names are not allowed" => "Isian tampaknya menjadi nama jaringan lokal namun nama-nama jaringan lokal tidak diperbolehkan",
    "The input appears to be a DNS hostname but cannot extract TLD part" => "Isian tampaknya menjadi hostname DNS tetapi tidak dapat mengekstrak bagian TLD",
    "The input appears to be a DNS hostname but cannot match TLD against known list" => "Isian tampaknya menjadi hostname DNS tapi tidak bisa cocok dengan TLD yang dikenal",

    // Laminas\Validator\Iban
    "Unknown country within the IBAN" => "Negara tidak diketahui dalam IBAN",
    "Countries outside the Single Euro Payments Area (SEPA) are not supported" => "Negara-negara di luar Single Euro Payments Area (SEPA) tidak didukung",
    "The input has a false IBAN format" => "Isian mempunyai IBAN format yang salah",
    "The input has failed the IBAN check" => "Isian telah gagal cek IBAN",

    // Laminas\Validator\Identical
    "The two given tokens do not match" => "Dua token yang diberikan tidak cocok",
    "No token was provided to match against" => "Tidak ada token yang diberikan untuk dibandingkan",

    // Laminas\Validator\InArray
    "The input was not found in the haystack" => "Isian tidak ditemukan di dalam haystack",

    // Laminas\Validator\Ip
    "The input does not appear to be a valid IP address" => "Isian tidak tampak sebagai IP address yang valid",

    // Laminas\Validator\IsInstanceOf
    "The input is not an instance of '%className%'" => "Isian bukanlah instance dari '%ClassName%'",

    // Laminas\Validator\Isbn
    "The input is not a valid ISBN number" => "Isian adalah ISBN number yang tidak valid",

    // Laminas\Validator\LessThan
    "The input is not less than '%max%'" => "Isian tidak kurang dari '%max%'",
    "The input is not less or equal than '%max%'" => "Isian tidak kurang atau sama dengan '%max%'",

    // Laminas\Validator\NotEmpty
    "Value is required and can't be empty" => "Nilai diperlukan dan tidak boleh kosong",
    "Invalid type given. String, integer, float, boolean or array expected" => "Tipe tidak valid. Diharapkan string, integer, float, boolean, atau array",

    // Laminas\Validator\Regex
    "The input does not match against pattern '%pattern%'" => "Isian tidak cocok dengan pola '%pattern%'",
    "There was an internal error while using the pattern '%pattern%'" => "Terjadi galat internal saat menggunakan pola '%pattern%'",

    // Laminas\Validator\Sitemap\Changefreq
    "The input is not a valid sitemap changefreq" => "Isian adalah changefreq sitemap yang tidak valid",

    // Laminas\Validator\Sitemap\Lastmod
    "The input is not a valid sitemap lastmod" => "Isian adalah lastmod sitemap yang tidak valid",

    // Laminas\Validator\Sitemap\Loc
    "The input is not a valid sitemap location" => "Isian adalah lokasi sitemap yang tidak valid",

    // Laminas\Validator\Sitemap\Priority
    "The input is not a valid sitemap priority" => "Isian adalah prioritas sitemap yang tidak valid",
    "Invalid type given. Numeric string, integer or float expected" => "Tipe yang diberikan tidak valid. Diharapkan numeric string, integer, atau float",

    // Laminas\Validator\Step
    "Invalid value given. Scalar expected" => "Tipe yang diberikan tidak valid. Diharapkan scalar",

    // Laminas\Validator\StringLength
    "The input is less than %min% characters long" => "Isian kurang dari %min% panjang karakter",
    "The input is more than %max% characters long" => "Isian lebih dari %max% panjang karakter",

    // Laminas\Validator\Timezone
    "Invalid timezone given." => "Zona waktu yang diberikan tidak valid.",
    "Invalid timezone location given." => "Lokasi zona waktu yang diberikan tidak valid.",
    "Invalid timezone abbreviation given." => "Singkatan zona waktu yang diberikan tidak valid.",

    // Laminas\Validator\Uri
    "The input does not appear to be a valid Uri" => "Isian tidak tampak sebagai Uri yang valid",
];
