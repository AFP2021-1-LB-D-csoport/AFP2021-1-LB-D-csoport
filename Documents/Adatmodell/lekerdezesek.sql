/*a lek�rdez�st, amivel azonos�tani lehet egy usert. 
A bejelentkez�sn�l megadja az email c�m�t (vagy a user nev�t, ha az alkalmasabb) 
�s a jelszav�t, ezt a k�t adatot tudom �tk�ldeni az sql parancsban.*/

SELECT profile_id
FROM PROFILE
WHERE (user_name = 'xyz'
OR email_address = 'xyz')
AND pwd = 'xyz'; -- xyz hely�re a keresett adatok j�nnek

/*az ingatlan keres�s�re szolg�l� lek�rdez�st. Most els� k�rben az ingatlan t�pus�t 
(h�z, lak�s, stb), a telep�l�st �s az �rat k�rem be, meg azt hogy elad�-e vagy kiad�, 
ezekkel az adatokkal kell gazd�lkodni.*/

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
WHERE PROTYP.property_type_desc in ('ELADO', 'KIADO') -- amelyik �ppen kell
AND PROLOC.city = 'xyz' -- ha ir�ny�t�sz�m alapj�n, akkor PROLOC.zip_code = ''
AND PROTYS.property_type_desc in ('LAKAS','HAZ','TELEK','GARAZS','NYARALO','�ZLETHELYISEG','RAKTAR')-- valamelyik, egy vagy t�bb
AND PRODES.property_price BETWEEN 1 AND 10000000 -- amilyen hat�rok k�z�tt kell keresni
;

