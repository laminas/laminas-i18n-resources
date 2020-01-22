<?php

/**
 * @see       https://github.com/laminas/laminas-i18n-resources for the canonical source repository
 * @copyright https://github.com/laminas/laminas-i18n-resources/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-i18n-resources/blob/master/LICENSE.md New BSD License
 */

/**
 * EN-Revision: 16.Jun.2015
 */
return [
    // Laminas\Authentication\Validator\Authentication
    "Invalid identity" => "Invalid identity",
    "Identity is ambiguous" => "Identity is ambiguous",
    "Invalid password" => "Invalid password",
    "Authentication failed" => "Authentication failed",

    // Laminas\I18n\Validator\Alnum
    "Invalid type given. String, integer or float expected" => "Invalid type given. String, integer or float expected",
    "The input contains characters which are non alphabetic and no digits" => "The input contains characters which are non alphabetic and no digits",
    "The input is an empty string" => "The input is an empty string",

    // Laminas\I18n\Validator\Alpha
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "The input contains non alphabetic characters" => "The input contains non alphabetic characters",
    "The input is an empty string" => "The input is an empty string",

    // Laminas\I18n\Validator\DateTime
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "The input does not appear to be a valid datetime" => "The input does not appear to be a valid datetime",

    // Laminas\I18n\Validator\IsFloat
    "Invalid type given. String, integer or float expected" => "Invalid type given. String, integer or float expected",
    "The input does not appear to be a float" => "The input does not appear to be a float",

    // Laminas\I18n\Validator\IsInt
    "Invalid type given. String or integer expected" => "Invalid type given. String or integer expected",
    "The input does not appear to be an integer" => "The input does not appear to be an integer",

    // Laminas\I18n\Validator\PhoneNumber
    "The input does not match a phone number format" => "The input does not match a phone number format",
    "The country provided is currently unsupported" => "The country provided is currently unsupported",
    "Invalid type given. String expected" => "Invalid type given. String expected",

    // Laminas\I18n\Validator\PostCode
    "Invalid type given. String or integer expected" => "Invalid type given. String or integer expected",
    "The input does not appear to be a postal code" => "The input does not appear to be a postal code",
    "An exception has been raised while validating the input" => "An exception has been raised while validating the input",

    // Laminas\Validator\Barcode
    "The input failed checksum validation" => "The input failed checksum validation",
    "The input contains invalid characters" => "The input contains invalid characters",
    "The input should have a length of %length% characters" => "The input should have a length of %length% characters",
    "Invalid type given. String expected" => "Invalid type given. String expected",

    // Laminas\Validator\Between
    "The input is not between '%min%' and '%max%', inclusively" => "The input is not between '%min%' and '%max%', inclusively",
    "The input is not strictly between '%min%' and '%max%'" => "The input is not strictly between '%min%' and '%max%'",

    // Laminas\Validator\Bitwise
    "The input has no common bit set with '%control%'" => "The input has no common bit set with '%control%'",
    "The input doesn't have the same bits set as '%control%'" => "The input doesn't have the same bits set as '%control%'",
    "The input has common bit set with '%control%'" => "The input has common bit set with '%control%'",

    // Laminas\Validator\Callback
    "The input is not valid" => "The input is not valid",
    "An exception has been raised within the callback" => "An exception has been raised within the callback",

    // Laminas\Validator\CreditCard
    "The input seems to contain an invalid checksum" => "The input seems to contain an invalid checksum",
    "The input must contain only digits" => "The input must contain only digits",
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "The input contains an invalid amount of digits" => "The input contains an invalid amount of digits",
    "The input is not from an allowed institute" => "The input is not from an allowed institute",
    "The input seems to be an invalid credit card number" => "The input seems to be an invalid credit card number",
    "An exception has been raised while validating the input" => "An exception has been raised while validating the input",

    // Laminas\Validator\Csrf
    "The form submitted did not originate from the expected site" => "The form submitted did not originate from the expected site",

    // Laminas\Validator\Date
    "Invalid type given. String, integer, array or DateTime expected" => "Invalid type given. String, integer, array or DateTime expected",
    "The input does not appear to be a valid date" => "The input does not appear to be a valid date",
    "The input does not fit the date format '%format%'" => "The input does not fit the date format '%format%'",

    // Laminas\Validator\DateStep
    "Invalid type given. String, integer, array or DateTime expected" => "Invalid type given. String, integer, array or DateTime expected",
    "The input does not appear to be a valid date" => "The input does not appear to be a valid date",
    "The input does not fit the date format '%format%'" => "The input does not fit the date format '%format%'",
    "The input is not a valid step" => "The input is not a valid step",

    // Laminas\Validator\Db\AbstractDb
    "No record matching the input was found" => "No record matching the input was found",
    "A record matching the input was found" => "A record matching the input was found",

    // Laminas\Validator\Digits
    "The input must contain only digits" => "The input must contain only digits",
    "The input is an empty string" => "The input is an empty string",
    "Invalid type given. String, integer or float expected" => "Invalid type given. String, integer or float expected",

    // Laminas\Validator\EmailAddress
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "The input is not a valid email address. Use the basic format local-part@hostname" => "The input is not a valid email address. Use the basic format local-part@hostname",
    "'%hostname%' is not a valid hostname for the email address" => "'%hostname%' is not a valid hostname for the email address",
    "'%hostname%' does not appear to have any valid MX or A records for the email address" => "'%hostname%' does not appear to have any valid MX or A records for the email address",
    "'%hostname%' is not in a routable network segment. The email address should not be resolved from public network" => "'%hostname%' is not in a routable network segment. The email address should not be resolved from public network",
    "'%localPart%' can not be matched against dot-atom format" => "'%localPart%' can not be matched against dot-atom format",
    "'%localPart%' can not be matched against quoted-string format" => "'%localPart%' can not be matched against quoted-string format",
    "'%localPart%' is not a valid local part for the email address" => "'%localPart%' is not a valid local part for the email address",
    "The input exceeds the allowed length" => "The input exceeds the allowed length",

    // Laminas\Validator\Explode
    "Invalid type given" => "Invalid type given",

    // Laminas\Validator\File\Count
    "Too many files, maximum '%max%' are allowed but '%count%' are given" => "Too many files, maximum '%max%' are allowed but '%count%' are given",
    "Too few files, minimum '%min%' are expected but '%count%' are given" => "Too few files, minimum '%min%' are expected but '%count%' are given",

    // Laminas\Validator\File\Crc32
    "File does not match the given crc32 hashes" => "File does not match the given crc32 hashes",
    "A crc32 hash could not be evaluated for the given file" => "A crc32 hash could not be evaluated for the given file",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\File\ExcludeExtension
    "File has an incorrect extension" => "File has an incorrect extension",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\File\Exists
    "File does not exist" => "File does not exist",

    // Laminas\Validator\File\Extension
    "File has an incorrect extension" => "File has an incorrect extension",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\File\FilesSize
    "All files in sum should have a maximum size of '%max%' but '%size%' were detected" => "All files in sum should have a maximum size of '%max%' but '%size%' were detected",
    "All files in sum should have a minimum size of '%min%' but '%size%' were detected" => "All files in sum should have a minimum size of '%min%' but '%size%' were detected",
    "One or more files can not be read" => "One or more files can not be read",

    // Laminas\Validator\File\Hash
    "File does not match the given hashes" => "File does not match the given hashes",
    "A hash could not be evaluated for the given file" => "A hash could not be evaluated for the given file",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\File\ImageSize
    "Maximum allowed width for image should be '%maxwidth%' but '%width%' detected" => "Maximum allowed width for image should be '%maxwidth%' but '%width%' detected",
    "Minimum expected width for image should be '%minwidth%' but '%width%' detected" => "Minimum expected width for image should be '%minwidth%' but '%width%' detected",
    "Maximum allowed height for image should be '%maxheight%' but '%height%' detected" => "Maximum allowed height for image should be '%maxheight%' but '%height%' detected",
    "Minimum expected height for image should be '%minheight%' but '%height%' detected" => "Minimum expected height for image should be '%minheight%' but '%height%' detected",
    "The size of image could not be detected" => "The size of image could not be detected",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\File\IsCompressed
    "File is not compressed, '%type%' detected" => "File is not compressed, '%type%' detected",
    "The mimetype could not be detected from the file" => "The mimetype could not be detected from the file",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\File\IsImage
    "File is no image, '%type%' detected" => "File is no image, '%type%' detected",
    "The mimetype could not be detected from the file" => "The mimetype could not be detected from the file",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\File\Md5
    "File does not match the given md5 hashes" => "File does not match the given md5 hashes",
    "An md5 hash could not be evaluated for the given file" => "An md5 hash could not be evaluated for the given file",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\File\MimeType
    "File has an incorrect mimetype of '%type%'" => "File has an incorrect mimetype of '%type%'",
    "The mimetype could not be detected from the file" => "The mimetype could not be detected from the file",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\File\NotExists
    "File exists" => "File exists",

    // Laminas\Validator\File\Sha1
    "File does not match the given sha1 hashes" => "File does not match the given sha1 hashes",
    "A sha1 hash could not be evaluated for the given file" => "A sha1 hash could not be evaluated for the given file",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\File\Size
    "Maximum allowed size for file is '%max%' but '%size%' detected" => "Maximum allowed size for file is '%max%' but '%size%' detected",
    "Minimum expected size for file is '%min%' but '%size%' detected" => "Minimum expected size for file is '%min%' but '%size%' detected",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\File\Upload
    "File '%value%' exceeds upload_max_filesize directive in php.ini" => "File '%value%' exceeds upload_max_filesize directive in php.ini",
    "File '%value%' exceeds the MAX_FILE_SIZE directive that was specified in the HTML form" => "File '%value%' exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
    "File '%value%' was only partially uploaded" => "File '%value%' was only partially uploaded",
    "File '%value%' was not uploaded" => "File '%value%' was not uploaded",
    "Missing a temporary folder to store '%value%'" => "Missing a temporary folder to store '%value%'",
    "Failed to write file '%value%' to disk" => "Failed to write file '%value%' to disk",
    "A PHP extension stopped uploading the file '%value%'" => "A PHP extension stopped uploading the file '%value%'",
    "File '%value%' was illegally uploaded. This could be a possible attack" => "File '%value%' was illegally uploaded. This could be a possible attack",
    "File '%value%' was not found" => "File '%value%' was not found",
    "Unknown error while uploading file '%value%'" => "Unknown error while uploading file '%value%'",

    // Laminas\Validator\File\UploadFile
    "The uploaded file exceeds the upload_max_filesize directive in php.ini" => "The uploaded file exceeds the upload_max_filesize directive in php.ini",
    "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form" => "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
    "The uploaded file was only partially uploaded" => "The uploaded file was only partially uploaded",
    "No file was uploaded" => "No file was uploaded",
    "Missing a temporary folder" => "Missing a temporary folder",
    "Failed to write file to disk" => "Failed to write file to disk",
    "A PHP extension stopped the file upload" => "A PHP extension stopped the file upload",
    "File was illegally uploaded. This could be a possible attack" => "File was illegally uploaded. This could be a possible attack",
    "File was not found" => "File was not found",
    "Unknown error while uploading file" => "Unknown error while uploading file",

    // Laminas\Validator\File\WordCount
    "Too many words, maximum '%max%' are allowed but '%count%' were counted" => "Too many words, maximum '%max%' are allowed but '%count%' were counted",
    "Too few words, minimum '%min%' are expected but '%count%' were counted" => "Too few words, minimum '%min%' are expected but '%count%' were counted",
    "File is not readable or does not exist" => "File is not readable or does not exist",

    // Laminas\Validator\GreaterThan
    "The input is not greater than '%min%'" => "The input is not greater than '%min%'",
    "The input is not greater than or equal to '%min%'" => "The input is not greater than or equal to '%min%'",

    // Laminas\Validator\Hex
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "The input contains non-hexadecimal characters" => "The input contains non-hexadecimal characters",

    // Laminas\Validator\Hostname
    "The input appears to be a DNS hostname but the given punycode notation cannot be decoded" => "The input appears to be a DNS hostname but the given punycode notation cannot be decoded",
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "The input appears to be a DNS hostname but contains a dash in an invalid position" => "The input appears to be a DNS hostname but contains a dash in an invalid position",
    "The input does not match the expected structure for a DNS hostname" => "The input does not match the expected structure for a DNS hostname",
    "The input appears to be a DNS hostname but cannot match against hostname schema for TLD '%tld%'" => "The input appears to be a DNS hostname but cannot match against hostname schema for TLD '%tld%'",
    "The input does not appear to be a valid local network name" => "The input does not appear to be a valid local network name",
    "The input does not appear to be a valid URI hostname" => "The input does not appear to be a valid URI hostname",
    "The input appears to be an IP address, but IP addresses are not allowed" => "The input appears to be an IP address, but IP addresses are not allowed",
    "The input appears to be a local network name but local network names are not allowed" => "The input appears to be a local network name but local network names are not allowed",
    "The input appears to be a DNS hostname but cannot extract TLD part" => "The input appears to be a DNS hostname but cannot extract TLD part",
    "The input appears to be a DNS hostname but cannot match TLD against known list" => "The input appears to be a DNS hostname but cannot match TLD against known list",

    // Laminas\Validator\Iban
    "Unknown country within the IBAN" => "Unknown country within the IBAN",
    "Countries outside the Single Euro Payments Area (SEPA) are not supported" => "Countries outside the Single Euro Payments Area (SEPA) are not supported",
    "The input has a false IBAN format" => "The input has a false IBAN format",
    "The input has failed the IBAN check" => "The input has failed the IBAN check",

    // Laminas\Validator\Identical
    "The two given tokens do not match" => "The two given tokens do not match",
    "No token was provided to match against" => "No token was provided to match against",

    // Laminas\Validator\InArray
    "The input was not found in the haystack" => "The input was not found in the haystack",

    // Laminas\Validator\Ip
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "The input does not appear to be a valid IP address" => "The input does not appear to be a valid IP address",

    // Laminas\Validator\IsInstanceOf
    "The input is not an instance of '%className%'" => "The input is not an instance of '%className%'",

    // Laminas\Validator\Isbn
    "Invalid type given. String or integer expected" => "Invalid type given. String or integer expected",
    "The input is not a valid ISBN number" => "The input is not a valid ISBN number",

    // Laminas\Validator\LessThan
    "The input is not less than '%max%'" => "The input is not less than '%max%'",
    "The input is not less or equal than '%max%'" => "The input is not less or equal than '%max%'",

    // Laminas\Validator\NotEmpty
    "Value is required and can't be empty" => "Value is required and can't be empty",
    "Invalid type given. String, integer, float, boolean or array expected" => "Invalid type given. String, integer, float, boolean or array expected",

    // Laminas\Validator\Regex
    "Invalid type given. String, integer or float expected" => "Invalid type given. String, integer or float expected",
    "The input does not match against pattern '%pattern%'" => "The input does not match against pattern '%pattern%'",
    "There was an internal error while using the pattern '%pattern%'" => "There was an internal error while using the pattern '%pattern%'",

    // Laminas\Validator\Sitemap\Changefreq
    "The input is not a valid sitemap changefreq" => "The input is not a valid sitemap changefreq",
    "Invalid type given. String expected" => "Invalid type given. String expected",

    // Laminas\Validator\Sitemap\Lastmod
    "The input is not a valid sitemap lastmod" => "The input is not a valid sitemap lastmod",
    "Invalid type given. String expected" => "Invalid type given. String expected",

    // Laminas\Validator\Sitemap\Loc
    "The input is not a valid sitemap location" => "The input is not a valid sitemap location",
    "Invalid type given. String expected" => "Invalid type given. String expected",

    // Laminas\Validator\Sitemap\Priority
    "The input is not a valid sitemap priority" => "The input is not a valid sitemap priority",
    "Invalid type given. Numeric string, integer or float expected" => "Invalid type given. Numeric string, integer or float expected",

    // Laminas\Validator\Step
    "Invalid value given. Scalar expected" => "Invalid value given. Scalar expected",
    "The input is not a valid step" => "The input is not a valid step",

    // Laminas\Validator\StringLength
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "The input is less than %min% characters long" => "The input is less than %min% characters long",
    "The input is more than %max% characters long" => "The input is more than %max% characters long",

    // Laminas\Validator\Timezone
    "Invalid timezone given." => "Invalid timezone given.",
    "Invalid timezone location given." => "Invalid timezone location given.",
    "Invalid timezone abbreviation given." => "Invalid timezone abbreviation given.",

    // Laminas\Validator\Uri
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "The input does not appear to be a valid Uri" => "The input does not appear to be a valid Uri",
];
