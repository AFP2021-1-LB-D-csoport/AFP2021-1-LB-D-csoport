insert into profile values('0001','TESZT_USER_1','teszt1@gmail.com','',DATE '2021-02-01','DELETED','');
insert into profile values('0002','TESZT_USER_2','teszt2@gmail.com','',DATE '2021-02-19','ACTIVE','');
insert into profile values('0003','TESZT_USER_3','teszt3@gmail.com','36301234556',DATE '2021-06-30','INACTIVE','');
insert into profile values('0004','TESZT_USER_4','teszt4@gmail.com','',DATE '2021-08-01','ACTIVE','');
insert into profile values('0005','TESZT_USER_5','teszt5@gmail.com','30702456666',DATE '2021-09-26','ACTIVE','');

insert into realtor values('A0001','GÉZA','','TESZT','',DATE '2006-05-02','','teszt.geza@ingatlanos.com','',DATE '2015-03-21');
insert into realtor values('A0002','ESZTER','','TESZTER','',DATE '2008-10-01','36201237889','','','');
insert into realtor values('A0003','BÉLA','KÁROLY','PRÓBA',0.12,DATE '2019-04-30','','b.proba@gmail.com','','');
insert into realtor values('A0004','GIZI','','TESZT',0.08,DATE '2020-06-21','','','','');

insert into property_type values('EL','ELADO');
insert into property_type values('KI','KIADO');

insert into property values('P0001',DATE '2020-12-01',DATE '2021-06-01','DELETED','EL');
insert into property values('P0002',DATE '2021-01-06','','ACTIVE','KI');
insert into property values('P0003',DATE '2021-06-08','','ACTIVE','EL');
insert into property values('P0004',DATE '2021-08-09','','ACTIVE','EL');
insert into property values('P0005',DATE '2021-09-26','','INACTIVE','KI');

insert into property_x_profile values('P0001','0001');
insert into property_x_profile values('P0002','0003');
insert into property_x_profile values('P0003','0004');
insert into property_x_profile values('P0004','0004');
insert into property_x_profile values('P0005','0005');

insert into property_location values('P0001','1034','BUDAPEST','BÉCSI','ÚT','60','','3','41');
insert into property_location values('P0002','5241','ABÁDSZALÓK','ADY ENDER','UTCA','1','','','');
insert into property_location values('P0004','9010','GYÕR','','','','','','');
insert into property_location values('P0005','1145','BUDAPEST','ÚJVILÁG','UTCA','','','','');

insert into property_heatings values('GAS_C','gaz (cirko)');
insert into property_heatings values('GAS_K','gaz (konvektor)');
insert into property_heatings values('HAZKP','hazkozponti futes');
insert into property_heatings values('HKP_E','hazkozponti futes egyedi meressel');
insert into property_heatings values('TAVFU','tavfutes');
insert into property_heatings values('TAV_E','tavfutes egyedi meressel');
insert into property_heatings values('ELEKT','elektromos');
insert into property_heatings values('FAN_C','fan-coil');
insert into property_heatings values('GAZKA','gazkazan');
insert into property_heatings values('VEGYE','vegyes tuzelesu kazan');
insert into property_heatings values('EGY_K','egyeb kazan');
insert into property_heatings values('CSERP','cserepkalyha');
insert into property_heatings values('PADLO','padlofutes');
insert into property_heatings values('FALF','falfutes');
insert into property_heatings values('MENNY','mennyizeti hutes-futes');
insert into property_heatings values('HOSZ','hoszivattyu');
insert into property_heatings values('MEGUJ','megujulo energia');
insert into property_heatings values('NINCS','nincs');
insert into property_heatings values('FA_C','fa/szen');

insert into property_orientations values('E','eszak');
insert into property_orientations values('EK','eszakkelet');
insert into property_orientations values('K','kelet');
insert into property_orientations values('D','del');
insert into property_orientations values('DK','delkelet');
insert into property_orientations values('DNY','delnyugat');
insert into property_orientations values('NY','nyugat');
insert into property_orientations values('ENY','eszaknyugat');

insert into property_views values('UDV','udvari');
insert into property_views values('UTCA','utcara nezo');
insert into property_views values('PANOR','panoramas');
insert into property_views values('KERT','kertre nezo');

insert into property_conditions values('UJEP','uj epitesu');
insert into property_conditions values('UJSZ','ujszeru');
insert into property_conditions values('FELUJ','felujitott');
insert into property_conditions values('JOALL','jo allapotu');
insert into property_conditions values('KOZEP','közepes allapotu');
insert into property_conditions values('UJTND','felujitando');
insert into property_conditions values('BEFTL','befejezetlen');

insert into property_types values('LAK','LAKAS');
insert into property_types values('HAZ','HAZ');
insert into property_types values('TELEK','TELEK');
insert into property_types values('GAR','GARAZS');
insert into property_types values('NYAR','NYARALO');
insert into property_types values('UZL','UZLETHELYISEG');
insert into property_types values('RAKT','RAKTAR');

insert into property_sub_types values('LAKT','tegla lakas');
insert into property_sub_types values('LAKP','panel lakas');
insert into property_sub_types values('ZSALU','csusztatott zsalus');
insert into property_sub_types values('EGYEB','egyeb');
insert into property_sub_types values('CSHAZ','csaladi haz');
insert into property_sub_types values('IKERH','ikerhaz');
insert into property_sub_types values('SORH','sorhaz');
insert into property_sub_types values('HAZR','hazresz');
insert into property_sub_types values('KAST','kastely');
insert into property_sub_types values('TANYA','tanya');
insert into property_sub_types values('KONNY','konnyuszerkezetes haz');
insert into property_sub_types values('VALYG','valyoghaz');
insert into property_sub_types values('VEGYF','vegyes falazatu');
insert into property_sub_types values('LAKTE','lakoovezeti telek');
insert into property_sub_types values('UDTE','uduloovezeti telek');
insert into property_sub_types values('KULTE','kulteruleti telek');
insert into property_sub_types values('EGYTE','egyeb telek');
insert into property_sub_types values('GARON','onallo garazs');
insert into property_sub_types values('GARTE','teremgarazs hely');
insert into property_sub_types values('BEALL','beallo');
insert into property_sub_types values('NYART','nyaralotelek');
insert into property_sub_types values('NYARH','hetvegi hazas nyaralo');
insert into property_sub_types values('NYARU','udulohazas nyaralo');
insert into property_sub_types values('LAKAS','lakas');
insert into property_sub_types values('BOLT','kiskereskedelem, bolt');
insert into property_sub_types values('VEND','vendeglatoipari egyseg');
insert into property_sub_types values('IROH','onallo irodahaz');
insert into property_sub_types values('IRODA','iroda');
insert into property_sub_types values('BEMUT','bemutatoterem');
insert into property_sub_types values('SZERV','szerviz');
insert into property_sub_types values('IPCS','ipari csarnok vagy raktar');
insert into property_sub_types values('LOGKP','logisztikai kozpont');
insert into property_sub_types values('PARKH','parkolohaz');
insert into property_sub_types values('SZALL','szalloda');
insert into property_sub_types values('HOST','panzio, hostel');
insert into property_sub_types values('SPRTK','sportkozpont');
insert into property_sub_types values('EGKP','egeszsegugyi kozpont');
insert into property_sub_types values('OK','oktatasi kozpont');
insert into property_sub_types values('MEZOG','mezogazdasagi telephely');
insert into property_sub_types values('RAKT','raktar');

insert into parking_types values('UDVB','UDVARI BEALLO');
insert into parking_types values('TEREM','TEREMGARAZS HELY');
insert into parking_types values('ONGAR','ONALLO GARAZS');
insert into parking_types values('KOZT','UTCA, KOZTERULET');

insert into property_comfort_types values('LUX','LUXUS');
insert into property_comfort_types values('DUPK','DUPLAKOMFORTOS');
insert into property_comfort_types values('OSSZK','OSSZKOMFORTOS');
insert into property_comfort_types values('KOMF','KOMFORTOS');
insert into property_comfort_types values('FELK','FELKOMFORTOS');
insert into property_comfort_types values('KOMN','KOMFORT NELKUL');

insert into attic_types values('TET','TETOTERI');
insert into attic_types values('NTET','NEM TETOTERI');
insert into attic_types values('LEGF','LEGFELSO EMELET, NEM TETOTERI');
insert into attic_types values('ZARO','ZAROSZINT');
insert into attic_types values('PENTH','PENTHOUSE');

insert into bathroom_toilet_types values('KULON','KULON HELYISEG');
insert into bathroom_toilet_types values('EGY','EGY HELYISEG');
insert into bathroom_toilet_types values('KESE','KULON ES EGYBEN IS');

insert into stairs_types values('KORF','KORFOLYOSOS');
insert into stairs_types values('ZART','ZART LEPCSOHAZAS');
insert into stairs_types values('FUGG','FUGGOFOLYOSO');
insert into stairs_types values('NINCS','NINCS LEPCSOHAZ');

insert into e_w_g_p_types values('BELUL','TELKEN BELUL');
insert into e_w_g_p_types values('UTC','UTCABAN');
insert into e_w_g_p_types values('NINCS','NINCS');
insert into e_w_g_p_types values('VAN','VAN');

insert into property_description values('P0001','LAK','LAKP','UJSZ','UDV','E','ELEKT','','OSSZK','NTET','EGY',3,2.3,'','I','','','',32000000,125,2,2,1,'KORF','','','','','N','','VAN','VAN','VAN','VAN');
insert into property_description values('P0002','HAZ','CSHAZ','FELUJ','','D','TAVFU','','KOMF','','','','','','','','','I',52000000,100,1,3,2,'','',2,'I','I','','','UTC','UTC','UTC','UTC');
insert into property_description values('P0003','TELEK','KULTE','','','','','','','','','','','','','','','',20000000,'','','','','',4000,'','','','','','BELUL','BELUL','BELUL','BELUL');
insert into property_description values('P0004','GAR','GARON','','','','','','','','','','','','','','','',19000000,'','','','','','','','','','','','NINCS','NINCS','NINCS','NINCS');
insert into property_description values('P0005','LAK','ZSALU','UJEP','UTCA','DNY','MENNY','KOZT','DUPK','ZARO','KESE','','','','','I','I','',75000000,160,3,1,2,'','','','','','N','','VAN','VAN','VAN','VAN');

insert into admin values('X0001','0001','','FULL_HIRDETES',DATE '2021-02-01',DATE '2021-10-01');
insert into admin values('X0002','','A0001','REALTOR',DATE '2021-02-01','');
insert into admin values('X0003','','A0002','REALTOR',DATE '2021-02-01','');
insert into admin values('X0004','0002','','FULL_HIRDETES',DATE '2021-02-19','');
insert into admin values('X0005','','A0003','REALTOR',DATE '2021-05-10','');
insert into admin values('X0006','0003','','FULL_HIRDETES',DATE '2021-06-30','');
insert into admin values('X0007','0004','','FULL_HIRDETES',DATE '2021-08-01','');
insert into admin values('X0008','0005','','FULL_HIRDETES',DATE '2021-09-26','');
insert into admin values('X0009','','A0004','REALTOR',DATE '2021-09-28','');

insert into property_x_realtor values('P0001','A0001');
insert into property_x_realtor values('P0002','A0003');
insert into property_x_realtor values('P0003','A0004');
insert into property_x_realtor values('P0004','A0003');
insert into property_x_realtor values('P0005','A0002');


