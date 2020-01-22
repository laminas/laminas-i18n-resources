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
    // Laminas\I18n\Validator\Alnum
    "Invalid type given. String, integer or float expected" => "Epäkelpo syöte. Pitäisi olla liukuluku, merkkijono tai kokonaisluku",
    "The input contains characters which are non alphabetic and no digits" => "Syöte on virheellinen, ainoastaan aakkoset ja numerot ovat sallittuja",
    "The input is an empty string" => "Syöte on tyhjä merkkijono",

    // Laminas\I18n\Validator\Alpha
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",
    "The input contains non alphabetic characters" => "Syöte on virheellinen, ainoastaan aakkoset ovat sallittuja",
    "The input is an empty string" => "Syöte on tyhjä merkkijono",

    // Laminas\I18n\Validator\DateTime
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",
    "The input does not appear to be a valid datetime" => "Syöte ei sisällä kelvollista päivämäärää ja aikaa",

    // Laminas\I18n\Validator\IsFloat
    "Invalid type given. String, integer or float expected" => "Epäkelpo syöte. Pitäisi olla liukuluku, merkkijono tai kokonaisluku",
    "The input does not appear to be a float" => "Syöte ei ole liukuluku",

    // Laminas\I18n\Validator\IsInt
    "Invalid type given. String or integer expected" => "Epäkelpo syöte. Pitäisi olla merkkijono tai kokonaisluku",
    "The input does not appear to be an integer" => "Syöte ei ole kokonaisluku",

    // Laminas\I18n\Validator\PhoneNumber
    "The input does not match a phone number format" => "Syöte ei ole puhelinnumeron muotoinen",
    "The country provided is currently unsupported" => "Annettu maa ei ole tuettu",
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",

    // Laminas\I18n\Validator\PostCode
    "Invalid type given. String or integer expected" => "Epäkelpo syöte. Pitäisi olla merkkijono tai kokonaisluku",
    "The input does not appear to be a postal code" => "Syöte ei ole käypä postiosoite",
    "An exception has been raised while validating the input" => "Syötettä tarkistettaessa tapahtui odottamaton virhe",

    // Laminas\Validator\Barcode
    "The input failed checksum validation" => "Syötteen tarkistusluku on väärä",
    "The input contains invalid characters" => "Syöte sisältää epäkelpoja merkkejä",
    "The input should have a length of %length% characters" => "Syötteen pitäisi olla %length% merkkiä pitkä",
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",

    // Laminas\Validator\Between
    "The input is not between '%min%' and '%max%', inclusively" => "Syöte ei ole luku väliltä %min%-%max%",
    "The input is not strictly between '%min%' and '%max%'" => "Syöte ei ole luku väliltä %min%-%max%, poislukien ylä- ja alarajat",

    // Laminas\Validator\Callback
    "The input is not valid" => "Syöte on epäkelpo",
    "An exception has been raised within the callback" => "Odottamaton virhe, callback-validaattori palautti poikkeuksen",

    // Laminas\Validator\CreditCard
    "The input seems to contain an invalid checksum" => "Syötteen tarkistusluku on viallinen",
    "The input must contain only digits" => "Syöte saa sisältää ainoastaan numeroita",
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",
    "The input contains an invalid amount of digits" => "Syöte sisältää väärän määrän numeroita",
    "The input is not from an allowed institute" => "Syöte ei ole sallitun luottolaitoksen alkuosa",
    "The input seems to be an invalid credit card number" => "Luottokortin numero tulkittiin virheelliseksi",
    "An exception has been raised while validating the input" => "Syötettä tarkistettaessa tapahtui odottamaton virhe",

    // Laminas\Validator\Csrf
    "The form submitted did not originate from the expected site" => "Lomake ei ole peräisin odotetulta sivustolta",

    // Laminas\Validator\Date
    "Invalid type given. String, integer, array or DateTime expected" => "Epäkelpo syöte. Pitäisi olla merkkijono, kokonaisluku, taulukko tai DateTime",
    "The input does not appear to be a valid date" => "Syöte ei ole kelvollinen päivämäärä",
    "The input does not fit the date format '%format%'" => "Syöte ei ole muotoa '%format%'",

    // Laminas\Validator\Db\AbstractDb
    "No record matching the input was found" => "Rekisteristä ei löytynyt arvoa, joka vastaisi syötettä",
    "A record matching the input was found" => "Rekisteristä löytyi syötettä vastaava arvo",

    // Laminas\Validator\Digits
    "Invalid type given. String, integer or float expected" => "Epäkelpo syöte. Pitäisi olla merkkijono, kokonaisluku tai liukuluku",
    "The input must contain only digits" => "Syöte on virheellinen, ainoastaan numerot ovat sallittuja",
    "The input is an empty string" => "Syöte on tyhjä merkkijono",

    // Laminas\Validator\EmailAddress
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",
    "The input is not a valid email address. Use the basic format local-part@hostname" => "Syöte on virheellinen sähköpostiosoite, ei vastaa muotoa paikallisosa@alue",
    "'%hostname%' is not a valid hostname for the email address" => "'%hostname%' on virheellinen verkkotunnus sähköpostiosoitteelle",
    "'%hostname%' does not appear to have any valid MX or A records for the email address" => "Sähköpostiosoitteen verkkotunnukselle '%hostname%' ei löydy MX- tai A-tietuetta",
    "'%hostname%' is not in a routable network segment. The email address should not be resolved from public network" => "'%hostname%' ei ole reititettävän verkon osa. Sähköpostiosoitetta ei pitäisi selvittää julkisesta verkosta",
    "'%localPart%' can not be matched against dot-atom format" => "Virheellinen paikallisosa, '%localPart%' ei ole verrattavissa dot-atom -muotoon",
    "'%localPart%' can not be matched against quoted-string format" => "Virheellinen paikallisosa, '%localPart%' ei ole verrattavissa quoted-string -muotoon",
    "'%localPart%' is not a valid local part for the email address" => "Sähköpostiosoitteen paikallisosa '%localPart%' on virheellinen",
    "The input exceeds the allowed length" => "Syöte on liian pitkä",

    // Laminas\Validator\File\Count
    "Too many files, maximum '%max%' are allowed but '%count%' are given" => "Virheellinen määrä tiedostoja, maksimimäärä on '%max%', vastaanotettiin '%count%'",
    "Too few files, minimum '%min%' are expected but '%count%' are given" => "Virheellinen määrä tiedostoja, minimimäärä on '%min%', vastaanotettiin '%count%'",

    // Laminas\Validator\File\Crc32
    "File does not match the given crc32 hashes" => "Tiedoston crc32-tarkistusluku ei vastaa annettua",
    "A crc32 hash could not be evaluated for the given file" => "Tarkistuslukua crc32 ei pystytty määrittämään vastaanotetulle tiedostolle",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\File\ExcludeExtension
    "File has an incorrect extension" => "Tiedostolla on virheellinen pääte",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\File\Exists
    "File does not exist" => "Tiedostoa ei ole olemassa",

    // Laminas\Validator\File\Extension
    "File has an incorrect extension" => "Tiedostolla on virheellinen pääte",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\File\FilesSize
    "All files in sum should have a maximum size of '%max%' but '%size%' were detected" => "Kaikkien tiedostojen yhteenlaskettu koko saa olla maksimissaan '%max%', vastaanotettiin '%size%'",
    "All files in sum should have a minimum size of '%min%' but '%size%' were detected" => "Kaikkien tiedostojen yhteenlaskettu koko pitää olla vähintään '%min%', vastaanotettiin '%size%'",
    "One or more files can not be read" => "Yhtä tai useampaa tiedostoa ei voida lukea",

    // Laminas\Validator\File\Hash
    "File does not match the given hashes" => "Tiedoston tarkastusluku ei vastaa annettua",
    "A hash could not be evaluated for the given file" => "Tarkistuslukua ei pystytty määrittämään vastaanotetulle tiedostolle",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\File\ImageSize
    "Maximum allowed width for image should be '%maxwidth%' but '%width%' detected" => "Kuvan maksimileveys on '%maxwidth%', annettu '%width%'",
    "Minimum expected width for image should be '%minwidth%' but '%width%' detected" => "Kuvan minimileveys on '%minwidth%', annettu '%width%'",
    "Maximum allowed height for image should be '%maxheight%' but '%height%' detected" => "Kuvan maksimikorkeus on '%maxheight%', annettu '%height%'",
    "Minimum expected height for image should be '%minheight%' but '%height%' detected" => "Kuvan minimikorkeus on '%minheight%', annettu '%height%'",
    "The size of image could not be detected" => "Kuvan kokoa ei voitu määrittää",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\File\IsCompressed
    "File is not compressed, '%type%' detected" => "Tiedosto ei ole pakattu, vastaanotettiin tyyppiä '%type%'",
    "The mimetype could not be detected from the file" => "Tiedoston MIME-tyyppiä ei pystytty määrittämään",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\File\IsImage
    "File is no image, '%type%' detected" => "Tiedosto ei ole kuvatiedosto, vastaanotettiin tyyppiä '%type%'",
    "The mimetype could not be detected from the file" => "Tiedoston MIME-tyyppiä ei pystytty määrittämään",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\File\Md5
    "File does not match the given md5 hashes" => "Tiedoston md5-tarkistusluku ei vastaa annettua",
    "An md5 hash could not be evaluated for the given file" => "Tiedostolle ei voitu laskea md5-tarkistuslukua",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\File\MimeType
    "File has an incorrect mimetype of '%type%'" => "Tiedoston MIME-tyyppi '%type%' on virheellinen",
    "The mimetype could not be detected from the file" => "Tiedoston MIME-tyyppiä ei pystytty määrittämään",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\File\NotExists
    "File exists" => "Tiedosto on olemassa",

    // Laminas\Validator\File\Sha1
    "File does not match the given sha1 hashes" => "Tiedoston sha1-tarkistusluku ei vastaa annettua",
    "A sha1 hash could not be evaluated for the given file" => "Tiedostolle ei voitu laskea sha1-tarkistuslukua",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\File\Size
    "Maximum allowed size for file is '%max%' but '%size%' detected" => "Tiedoston maksimikoko on '%max%', vastaanotettu '%size%'",
    "Minimum expected size for file is '%min%' but '%size%' detected" => "Tiedoston minimikoko on '%min%', vastaanotettu '%size%'",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\File\Upload
    "File '%value%' exceeds the defined ini size" => "Tiedosto '%value%' ylittää ini-tiedostossa määritellyn tiedostokoon",
    "File '%value%' exceeds the defined form size" => "Tiedosto '%value%' ylittää lomakkeessa määritellyn tiedostokoon",
    "File '%value%' exceeds upload_max_filesize directive in php.ini" => "Tiedosto '%value%' ylittää ini-tiedostossa määritellyn tiedostokoon",
    "File '%value%' exceeds the MAX_FILE_SIZE directive that was specified in the HTML form" => "Tiedosto '%value%' ylittää lomakkeessa määritellyn tiedostokoon",
    "File '%value%' was only partially uploaded" => "Tiedosto '%value%' vastaanotettiin ainoastaan osittain",
    "File '%value%' was not uploaded" => "Tiedostoa '%value%' ei lähetetty",
    "Missing a temporary folder to store '%value%'" => "Väliaikaishakemistoa ei löytynyt tiedostolle '%value%'",
    "Failed to write file '%value%' to disk" => "Tiedostoon '%value%' ei voida kirjoittaa",
    "A PHP extension stopped uploading the file '%value%'" => "PHP:n lisäosa palautti virheen kesken tiedoston '%value%' lähetyksen",
    "File '%value%' was illegally uploaded. This could be a possible attack" => "Tiedoston '%value%' lähetyksessä haivattu laittomuus, mahdollinen hyökkäys",
    "File '%value%' was not found" => "Tiedostoa '%value%' ei löydy",
    "Unknown error while uploading file '%value%'" => "Tiedoston '%value%' lähetyksessä tapahtui tunnistamaton virhe",

    // Laminas\Validator\File\WordCount
    "Too many words, maximum '%max%' are allowed but '%count%' were counted" => "Virheellinen määrä sanoja, maksimäärä on '%max%', annettu '%count%'",
    "Too few words, minimum '%min%' are expected but '%count%' were counted" => "Virheellinen määrä sanoja, minimimäärä on '%min%', annettu '%count%'",
    "File is not readable or does not exist" => "Tiedostoa ei voida lukea tai sitä ei ole",

    // Laminas\Validator\GreaterThan
    "The input is not greater than '%min%'" => "Syöte ei ole suurempi kuin '%min%'",
    "The input is not greater than or equal to '%min%'" => "Syöte ei ole suurempi tai yhtä suuri kuin '%min%'",

    // Laminas\Validator\Hex
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",
    "The input contains non-hexadecimal characters" => "Syöte ei sisällä ainoastaan heksadesimaalin muotoisia merkkejä",

    // Laminas\Validator\Hostname
    "The input appears to be a DNS hostname but the given punycode notation cannot be decoded" => "Verkkotunnuksen punycode-koodauksen purku epäonnistui",
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",
    "The input appears to be a DNS hostname but contains a dash in an invalid position" => "Verkkotunnus sisältää viivan väärässä paikassa",
    "The input does not match the expected structure for a DNS hostname" => "Verkkotunnus on jäsennykseltään virheellinen",
    "The input appears to be a DNS hostname but cannot match against hostname schema for TLD '%tld%'" => "Verkkotunnuksen TLD-osa '%tld%' on virheellinen",
    "The input does not appear to be a valid local network name" => "Syöte ei ole kelvollinen paikallisverkon tunnus",
    "The input does not appear to be a valid URI hostname" => "Syöte ei ole kelvollinen URI-verkkotunnus",
    "The input appears to be an IP address, but IP addresses are not allowed" => "Syöte näyttäisi olevan ip-osoite eikä verkkotunnus",
    "The input appears to be a local network name but local network names are not allowed" => "Verkkotunnus tulkittiin paikallisverkon tunnukseksi, jotka eivät ole sallittuja",
    "The input appears to be a DNS hostname but cannot extract TLD part" => "Verkkotunnuksen TLD-osaa ei pystytty erottamaan",
    "The input appears to be a DNS hostname but cannot match TLD against known list" => "Verkkotunnuksen TLD-osa ei ole tunnettu",

    // Laminas\Validator\Iban
    "Unknown country within the IBAN" => "Maata ei pystytty tunnistamaan IBAN-koodista",
    "Countries outside the Single Euro Payments Area (SEPA) are not supported" => "SEPA-alueen ulkopuoliset maat eivät ole tuettuja",
    "The input has a false IBAN format" => "IBAN-koodi on väärän muotoinen",
    "The input has failed the IBAN check" => "IBAN-koodin tarkastus epäonnistui",

    // Laminas\Validator\Identical
    "The two given tokens do not match" => "Annetut kaksi arvoa eivät täsmää",
    "No token was provided to match against" => "Toinen arvoista puuttuu",

    // Laminas\Validator\InArray
    "The input was not found in the haystack" => "Syötettä ei löydy sallittujen arvojen joukosta",

    // Laminas\Validator\Ip
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",
    "The input does not appear to be a valid IP address" => "Syöte ei ole käypä IP-osoite",

    // Laminas\Validator\Isbn
    "Invalid type given. String or integer expected" => "Epäkelpo syöte. Pitäisi olla merkkijono tai kokonaisluku",
    "The input is not a valid ISBN number" => "Syöte ei ole ISBN-numero",

    // Laminas\Validator\LessThan
    "The input is not less than '%max%'" => "Syöte ei ole pienempi kuin '%max%'",
    "The input is not less or equal than '%max%'" => "Syöte ei ole pienempi tai yhtä suuri kuin '%max%'",

    // Laminas\Validator\NotEmpty
    "Value is required and can't be empty" => "Kenttä ei voi olla tyhjä",
    "Invalid type given. String, integer, float, boolean or array expected" => "Epäkelpo syöte. Pitäisi olla kokonaisluku, liukuluku, boolean tai taulukko",

    // Laminas\Validator\Regex
    "Invalid type given. String, integer or float expected" => "Epäkelpo syöte. Pitäisi olla merkkijono, kokonaisluku tai liukuluku",
    "The input does not match against pattern '%pattern%'" => "Syöte ei ole muotoa '%pattern%'",
    "There was an internal error while using the pattern '%pattern%'" => "Sisäinen virhe käytettäessa muotoa '%pattern%'",

    // Laminas\Validator\Sitemap\Changefreq
    "The input is not a valid sitemap changefreq" => "Syöte ei ole käypä sivukartan muutosnopeus",
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",

    // Laminas\Validator\Sitemap\Lastmod
    "The input is not a valid sitemap lastmod" => "Syöte ei ole käypä arvo sivukartan viimeksimuokatuksi arvoksi",
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",

    // Laminas\Validator\Sitemap\Loc
    "The input is not a valid sitemap location" => "Syöte ei ole käypä sivukartan sijainti",
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",

    // Laminas\Validator\Sitemap\Priority
    "The input is not a valid sitemap priority" => "Syöte ei ole käypä sivukartan prioriteetti",
    "Invalid type given. Numeric string, integer or float expected" => "Epäkelpo syöte. Pitäisi olla kokonaisluku tai liukuluku",

    // Laminas\Validator\StringLength
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",
    "The input is less than %min% characters long" => "Syöte on lyhyempi kuin vaaditut %min% merkkiä",
    "The input is more than %max% characters long" => "Syöte on pidempi kuin sallitut %max% merkkiä",

    // Laminas\Validator\Timezone
    "Invalid timezone given." => "Annettu aikavyöhyke ei ole kelvollinen.",
    "Invalid timezone location given." => "Annettu aikavyöhykkeen sijainti ei ole kelvollinen.",
    "Invalid timezone abbreviation given." => "Annettu aikavyöhykkeen lyhenne ei ole kelvollinen.",

    // Laminas\Validator\Uri
    "Invalid type given. String expected" => "Epäkelpo syöte. Pitäisi olla merkkijono",
    "The input does not appear to be a valid Uri" => "Syöte ei ole kelvollinen Uri",
];
