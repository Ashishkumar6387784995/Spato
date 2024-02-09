<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategorieStatic;

class CategorieStaticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for POOLS

            // for EPS POOLS
                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'EPS Pools','categorie_3' => 'EPS Stein P40',]);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'EPS Pools','categorie_3' => 'EPS Stein P80',]);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'EPS Pools','categorie_3' => 'EPS Stein Rundbogen',]);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'EPS Pools','categorie_3' => 'EPS Stein P40 Gigant',]);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'EPS Pools','categorie_3' => 'EPS Stein Rundbogen Gigant',]);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'EPS Pools','categorie_3' => 'EPS Stein Überlaufrinne P100',]);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'EPS Pools','categorie_3' => 'EPS Treppen',]);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'EPS Pools','categorie_3' => 'Zubehör',]);



            // for Überlaufrinnen
                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Überlaufrinnen','categorie_3' => 'Beton Überlaufrinne']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Überlaufrinnen','categorie_3' => 'EPS Stein Überlaufrinne P100']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Überlaufrinnen','categorie_3' => 'Überlaufrinnen Roste']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Überlaufrinnen','categorie_3' => 'Zubehör']);

            // for Einbauteile
                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Einbauteile','categorie_3' => 'Edelstahl BEHNCKE']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Einbauteile','categorie_3' => 'Edelstahl HUGO LAHME']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Einbauteile','categorie_3' => 'Rotguss HUGO LAHME']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Einbauteile','categorie_3' => 'ABS Kunststoff']);
            
                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Einbauteile','categorie_3' => 'ASTRAL/FLUIDRA/ACSI/BWT']);
            
           
        
            // for Handläufe
                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Haltestangen','categorie_3' => 'Haltestangen']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Haltestangen','categorie_3' => 'Handläufe']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Haltestangen','categorie_3' => 'Zubehör']);
            
                
            // for Leitern
                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Leitern','categorie_3' => 'Leiter Marina für öffentliche Pools']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Leitern','categorie_3' => 'Leiter Edelstahl Standard']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Leitern','categorie_3' => 'Leiter Edelstahl Muro Slim']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Leitern','categorie_3' => 'Leiter Edlelstahl Mixta']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Leitern','categorie_3' => 'Leiter 2-teilig']);

                CategorieStatic::create(['categorie_1' => 'POOLS','categorie_2' => 'Leitern','categorie_3' => 'Zubehör']);

            
        
        // for TECHNIK
            // for Filter 1
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Filter 1','categorie_3' => 'Sandfilter']);

                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Filter 1','categorie_3' => 'Kartuschenfilter']);

                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Filter 1','categorie_3' => 'Skimfilter']);

                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Filter 1','categorie_3' => 'Filtermaterial']);

            // for filter 2
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Filter 2','categorie_3' => 'Zubehör']);


            // for Zubehör öffentliche Filtertechnik
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Zubehör öffentliche Filtertechnik','categorie_3' => 'Sandfilter öffentlich']);

                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Zubehör öffentliche Filtertechnik','categorie_3' => 'Überlauf-Sammelbehälter']);

                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Zubehör öffentliche Filtertechnik','categorie_3' => 'Zubehör und Technik']);

            // for Ventile
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Ventile','categorie_3' => 'Stangenventile']);

                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Ventile','categorie_3' => 'Mehrwege Ventile']);


            // for Pumpen
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Pumpen','categorie_3' => 'Umwälzpumpen Schwimmbad']);

                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Pumpen','categorie_3' => 'Jet-Pumpen Attraktionen']);


            // for Filteranlagen
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Filteranlagen','categorie_3' => '']);

    
            // for Heizsysteme
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Heizsysteme','categorie_3' => 'Wärmepumpen']);
    
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Heizsysteme','categorie_3' => 'Wärmetauscher']);
    
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Heizsysteme','categorie_3' => 'Elektro Wärmetauscher']);
    
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Heizsysteme','categorie_3' => 'Solarabsorber']);
    
            
            // FOR Steuerungen
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Steuerungen','categorie_3' => 'Filtersteuerungen']);
        
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Steuerungen','categorie_3' => 'Heizfiltersteuerungen']);
        
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Steuerungen','categorie_3' => 'Niveausteuerungen']);
        
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Steuerungen','categorie_3' => 'Überlauf-Sammelbehälter Steuerungen']);
        
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Steuerungen','categorie_3' => 'Temperatursteuerungen']);
        
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Steuerungen','categorie_3' => 'PN Steuerungen']);
        
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Steuerungen','categorie_3' => 'Piezo Steuerungen']);
        
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Steuerungen','categorie_3' => 'Rückspülsteuerungen']);
        
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Steuerungen','categorie_3' => 'Frequenz-Umformer']);
        
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Steuerungen','categorie_3' => 'Zubehör']);
        
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Steuerungen','categorie_3' => 'Stellantriebe']);
        
            
            // for Luftentfeuchter
                CategorieStatic::create(['categorie_1' => 'TECHNIK','categorie_2' => 'Luftentfeuchter','categorie_3' => 'Full Inverter Luftentfeuchter']);

        
        // FOR ATTRAKTIONEN
            
            // for Gegenstromanlagen
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Gegenstromanlagen','categorie_3' => 'Edelstahl/Rotguss HUGO LAHME FITSTAR']);
                
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Gegenstromanlagen','categorie_3' => 'ABS Kunsstoff']);

                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Gegenstromanlagen','categorie_3' => 'ABS Kunsstoff SPECK BADU JET']);

            
            // for Massageanlagen
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Massageanlagen','categorie_3' => 'Edelstahl/Rotguss HUGO LAHME FITSTAR']);
                
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Massageanlagen','categorie_3' => 'ABS Kunststoff/Edelstahl']);

                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Massageanlagen','categorie_3' => 'Bedufter Modul speziell für Whirlpools']);

                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Massageanlagen','categorie_3' => 'Lufterwärmung']);

                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Massageanlagen','categorie_3' => 'Luftgebläse']);
            
            
            // for Schwallduschen
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Schwallduschen','categorie_3' => 'Edelstahl/Rotguss HUGO LAHME FITSTAR']);
                
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Schwallduschen','categorie_3' => 'Edelstahl/PVC']);

            // for Wasserkanonen
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Wasserkanonen','categorie_3' => 'Edelstahl/Rotguss HUGO LAHME FITSTAR']);
                
            // for Luftsprudelsitz
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Luftsprudelsitz','categorie_3' => '']);
            
            
            // for Wasserfall
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Wasserfall','categorie_3' => 'Edelstahl/Rotguss HUGO LAHME FITSTAR']);
            
            // for Gartenduschen
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Gartenduschen','categorie_3' => 'Solardusche']);
            
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Gartenduschen','categorie_3' => 'Gartendusche']);
            
                CategorieStatic::create(['categorie_1' => 'ATTRAKTIONEN','categorie_2' => 'Gartenduschen','categorie_3' => 'Pool Liege']);
            
        // for WASSERPFLEGE
            // for Mess und Regelanlagen
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Mess und Regelanlagen','categorie_3' => '']);
                
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Mess und Regelanlagen','categorie_3' => '']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Mess und Regelanlagen','categorie_3' => '']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Mess und Regelanlagen','categorie_3' => '']);

            
            // for Elektrolyse
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Elektrolyse','categorie_3' => 'Filtersteuerung inkl. Elektrolyse, pH und Redox']);
                
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Elektrolyse','categorie_3' => 'Elektrolyse']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Elektrolyse','categorie_3' => 'BWT Perlwasser']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Elektrolyse','categorie_3' => 'Ersatz-Elektrolysezellen']);

            // for UV Anlagen
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'UV Anlagen','categorie_3' => 'UV-C Ionisator']);
                
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'UV Anlagen','categorie_3' => 'UV-C Sterilisator']);
                
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'UV Anlagen','categorie_3' => 'UV-C Tech-Sterilisator']);
                
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'UV Anlagen','categorie_3' => 'UV-C Duplex']);
                
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'UV Anlagen','categorie_3' => 'UV-C Niederdruck PE Gehäuse']);
                
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'UV Anlagen','categorie_3' => 'Zubehör für UV-C Anlagen']);
            
            // for Reinigungsroboter
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungsroboter','categorie_3' => 'Fairland X Warrior Ultra Clean']);
   
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungsroboter','categorie_3' => 'SMO Robot Tank X11']);
                
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungsroboter','categorie_3' => 'Maytronics Professional Smart Scoop Cleaner']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungsroboter','categorie_3' => 'Maytronics Professional Line Scoop Comfort Cleaner mit Smartphonenavigation']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungsroboter','categorie_3' => 'Maytronics Professional Line Smart ACTIVE Cleaner']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungsroboter','categorie_3' => 'Maytronics Commercial Line Dolphin WAVE 50']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungsroboter','categorie_3' => 'Maytronics Commercial Line Dolphin WAVE 100']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungsroboter','categorie_3' => 'Maytronics Commercial Line Dolphin WAVE 150']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungsroboter','categorie_3' => 'Maytronics Commercial Line Dolphin WAVE 200']);
            
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungsroboter','categorie_3' => 'Maytronics Commercial Line Dolphin WAVE 300XL']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungsroboter','categorie_3' => 'Aquatron Cosmy']);
            
            
            // for Reinigungszubehör
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungszubehör','categorie_3' => 'Teleskopstangen']);
   
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungszubehör','categorie_3' => 'Reinigungsbürsten']);
                
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungszubehör','categorie_3' => 'Kescher']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungszubehör','categorie_3' => 'Dosierschwimmer']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungszubehör','categorie_3' => 'Saugschläuche']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungszubehör','categorie_3' => 'Saugerköpfe']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungszubehör','categorie_3' => 'Reinigungsaccesoires']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungszubehör','categorie_3' => 'Thermometer']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Reinigungszubehör','categorie_3' => 'Folien-Reparatursets']);

            // for Wasserpflegeprodukte
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Wasserpflegeprodukte','categorie_3' => 'Desinfektion']);
    
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Wasserpflegeprodukte','categorie_3' => 'pH Wert']);
                
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Wasserpflegeprodukte','categorie_3' => 'Algenbekämpfung und Überwinterung']);

                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Wasserpflegeprodukte','categorie_3' => 'Pflege und Reinigung']);


            // for Messung
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Messung','categorie_3' => 'elektronisches Salz Analysegerät']);
        
                CategorieStatic::create(['categorie_1' => 'WASSERPFLEGE','categorie_2' => 'Messung','categorie_3' => 'elektronisches pH Analysegerät']);
        
        // FOR VERROHRUNG
            // for Rohre und Flexrohre
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Rohre und Flexrohre','categorie_3' => 'PVC Druckrohr']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Rohre und Flexrohre','categorie_3' => 'PVC Flexrohr']);
                
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Rohre und Flexrohre','categorie_3' => 'HDPE Schutzrohr']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Rohre und Flexrohre','categorie_3' => 'PE 100 Druckrohre, SDR 11, PN 16']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Rohre und Flexrohre','categorie_3' => 'PE 100 Druckrohre, SDR 11, PN 10']);
            
            // Fittings und Armaturen
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'PVC Flexrohr Klemmfittings']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'PVC Fittings']);
                
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'PVC Behälterdurchführungen']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'PVC Rückschlagventile']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'PVC Rohrschellen']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'PVC Kugelhähne und Ventile']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'PVC Absperrschieber']);
                
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'PVC 3-Wege Kugelhähnes']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'PVC Einlegeteile für Kugelhähne und Ventile']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'PVC Klappen']);
                
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'PVC Schaugläser und Sondenhalter']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Fittings und Armaturen','categorie_3' => 'Durchflußmesser']);

            // PVC Klebefittings schwarz
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PVC Klebefittings schwarz','categorie_3' => '']);

            // PVC Klebefittings weiß
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PVC Klebefittings weiß','categorie_3' => '']);

            // PVC Flexfit weiß
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PVC Flexfit weiß','categorie_3' => '']);

            // PP Klemmfittings
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Kupplung, Klemm x Klemm']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Reduzierkupplung, Klemm x Klemm']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Endkappe, Klemm']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Winkel 90° mit Wandscheibe, Klemm x IG']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Kupplung, Klemm x IG']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Kupplung, Klemm x AG']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Kupplung mit Flansch, Komplett-Set, Klemm x Flansch']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Universalkupplung, Klemm x Klemm']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Globalkupplung, Klemm x Klemm']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Winkel 90°, Klemm x Klemm']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Winkel 90°, Klemm x AG']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Winkel 90°, Klemm x IG']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP T-Stück, Klemm x Klemm x Klemm']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP T-Stück, Klemm x AG x Klemm']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP Reduzier T-Stück, Klemm x Klemm x Klemm']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Klemmfittings','categorie_3' => 'PP T-Stück, Klemm x IG x Klemm']);

        
            // PP Anbohrschellen
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Anbohrschellen','categorie_3' => 'PP Anbohrschelle, 2 Schrauben, Verstärkungsring, 0- Ring, Schelle x IG']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Anbohrschellen','categorie_3' => 'PP Anbohrschelle, 4 Schrauben, Verstärkungsring, 0- Ring, Schelle x IG']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'PP Anbohrschellen','categorie_3' => 'PP Anbohrschelle, 6 Schrauben, Verstärkungsring, 0- Ring, Schelle x IG']);

            // Magnetventile
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Magnetventile','categorie_3' => 'Magnetventile WKB']);

                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Magnetventile','categorie_3' => 'Magnetventile Bürkert']);

            // Kleber
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Kleber','categorie_3' => '']);

            // Reiniger
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Reiniger','categorie_3' => '']);

            // Teflon
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Teflon','categorie_3' => '']);
            
            // Zubehör
                CategorieStatic::create(['categorie_1' => 'VERROHRUNG','categorie_2' => 'Zubehör','categorie_3' => '']);
        // 
    }
}
