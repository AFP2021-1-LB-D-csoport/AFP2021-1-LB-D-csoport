/*a lekérdezést, amivel azonosítani lehet egy usert. 
A bejelentkezésnél megadja az email címét (vagy a user nevét, ha az alkalmasabb) 
és a jelszavát, ezt a két adatot tudom átküldeni az sql parancsban.*/

SELECT profile_id
FROM PROFILE
WHERE (user_name = 'xyz'
OR email_address = 'xyz')
AND pwd = 'xyz'; -- xyz helyére a keresett adatok jönnek

/*az ingatlan keresésére szolgáló lekérdezést. Most elsõ körben az ingatlan típusát 
(ház, lakás, stb), a települést és az árat kérem be, meg azt hogy eladó-e vagy kiadó, 
ezekkel az adatokkal kell gazdálkodni.*/

SELECT PRODES.property_id
FROM PROPERTY_DESCRIPTION PRODES
JOIN PROPERTY PROPER
    ON PROPER.property_id = PRODES.property_id
JOIN PROPERTY_LOCATION PROLOC
    ON PROLOC.property_id = PROPER.property_id
JOIN PROPERTY_TYPE PROTYP
    ON PROTYP.property_type_id = PROPER.property_type_id
JOIN PROPERTY_TYPES PROTYS
    ON PROTYS.property_type_code = PRODES.property_type
WHERE PROTYP.property_type_desc in ('ELADO', 'KIADO') -- amelyik éppen kell
AND PROLOC.city = 'xyz' -- ha irányítószám alapján, akkor PROLOC.zip_code = ''
AND PROTYS.property_type_desc in ('LAKAS','HAZ','TELEK','GARAZS','NYARALO','ÜZLETHELYISEG','RAKTAR')-- valamelyik, egy vagy több
AND PRODES.property_price BETWEEN 1 AND 10000000 -- amilyen határok között kell keresni
;

