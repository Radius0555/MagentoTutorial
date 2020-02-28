# Przelewy24 - wtyczka Magento
## Instrukcja przygotowanie paczki instalacyjnej

* Pliki, które będą składały się na paczkę muszą być umieszczone w odpowiednich katalogach Magento
* Plik **Dialcom_Przeleewy.xml** (znajduje się w głównym katalogu wtyczki) należy umieścić w katalogu Magento **var/pear** dla wersji wcześniejsze niż 1.5 lub **var/connect** dla wersji 1.5 i późniejszej.
* W celu zbudowania paczki należy wybrać w panelu administracyjnym zakładkę **System >  Package Extensions** i przejść do zakładki **Load Local Package**
* Po wczytaniu  pliku **Dialcom_Przeleewy.xml** i ewentualnej edycji należy użyć przycisku **Save Data and Create Package**
* Paczka zostanie utworzona w katalogu Magento, w którym znajduje się plik **Dialcom_Przeleewy.xml**

### Lista prefixów katalogu magento (zakładka **Contents**)
* Magento Local module file - ./app/code/local
* Magento Community module file - ./app/code/community
* Magento Core team module file - ./app/code/core
* Magento User Interface (layouts, templates) - ./app/design
* Magento Global Configuration - ./app/etc
* Magento PHP Library file - ./lib
* Magento Locale language file - ./app/locale
* Magento Media library - ./media
* Magento Theme Skin (Images, CSS, JS) - ./skin
* Magento Other web accessible file - ./
* Magento PHPUnit test - ./tests
* Magento other - ./

### Wyślij mailem link do P24 ###
* Stworzony jest domyślny szablon dla maila z linkiem do płatności z Przelewy24 w języku polskim
* Lokalizacja skórki: /app/locale/pl_PL/template/email/przelewy24/p24_default_mail_with_link.html
* Aby dodać szablon w innym języku, należy utworzyć go w odpowiednim katalogu językowym
* Domyślny szablon jest wybierany w przypadku gdy w zakładce 'Ustawienia Przelewy24' jest wybrany 'Default Template from Locale' dla pola 'Szablon email dla przycisku "Wyślij mailem link do P24"'. 

### [Szczegółowa instrukcja](http://info2.magento.com/rs/magentoenterprise/images/packagingmagentoconnectextensions6%200.pdf)

## Wymagania wtyczki i sklepu ##

- PHP 5.4+
- Apache 2.x lub Nginx 1.7.x
- MySQL 5.6+
- cURL
- SOAP
