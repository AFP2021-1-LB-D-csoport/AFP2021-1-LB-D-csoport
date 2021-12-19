

CREATE TABLE admin (
    admin_id         VARCHAR2(100) NOT NULL,
    profile_id       NUMBER NOT NULL,
    realtor_id       NUMBER NOT NULL,
    permission_type  VARCHAR2(100),
    permission_start DATE,
    permission_end   DATE
);

COMMENT ON COLUMN admin.permission_type IS
    'JOGOSULTS�GI SZINT';

ALTER TABLE admin ADD CONSTRAINT admin_pk PRIMARY KEY ( admin_id );

CREATE TABLE attic_types (
    attic_type_code VARCHAR2(5) NOT NULL,
    attic_type_desc VARCHAR2(100)
);

ALTER TABLE attic_types ADD CONSTRAINT attic_types_pk PRIMARY KEY ( attic_type_code );

CREATE TABLE bathroom_toilet_types (
    bathroom_toilet_type_code VARCHAR2(5) NOT NULL,
    bathroom_toilet_type_desc VARCHAR2(100)
);

ALTER TABLE bathroom_toilet_types ADD CONSTRAINT bathroom_toilet_types_pk PRIMARY KEY ( bathroom_toilet_type_code );

CREATE TABLE e_w_g_p_types (
    e_w_g_p_type_code VARCHAR2(5) NOT NULL,
    e_w_g_p_type_desc VARCHAR2(100)
);

ALTER TABLE e_w_g_p_types ADD CONSTRAINT e_w_g_p_types_pk PRIMARY KEY ( e_w_g_p_type_code );

CREATE TABLE parking_types (
    parking_type_code VARCHAR2(5) NOT NULL,
    parking_type_desc VARCHAR2(100)
);

ALTER TABLE parking_types ADD CONSTRAINT parking_types_pk PRIMARY KEY ( parking_type_code );

CREATE TABLE photos (
    photo_id    NUMBER NOT NULL,
    "FILE"      NVARCHAR2(800) NOT NULL,
    description NVARCHAR2(800),
    title       NVARCHAR2(100),
    status      VARCHAR2(10)
);

ALTER TABLE photos ADD CONSTRAINT photos_pk PRIMARY KEY ( photo_id );

CREATE TABLE profile (
    profile_id           NUMBER NOT NULL,
    user_name            VARCHAR2(100) NOT NULL,
    email_address        VARCHAR2(100) NOT NULL,
    phone_number         VARCHAR2(100),
    date_of_registration DATE NOT NULL,
    status               VARCHAR2(10) NOT NULL,
    pwd                  VARCHAR2(100) NOT NULL
);

ALTER TABLE profile ADD CONSTRAINT profile_pk PRIMARY KEY ( profile_id );

CREATE TABLE property (
    property_id      NUMBER NOT NULL,
    date_on_market   DATE,
    date_of_market   DATE,
    status           VARCHAR2(100) NOT NULL,
    property_type_id VARCHAR2(2) NOT NULL
);

ALTER TABLE property ADD CONSTRAINT property_pk PRIMARY KEY ( property_id );

CREATE TABLE property_comfort_types (
    comfort_type_code VARCHAR2(5) NOT NULL,
    comfort_type_desc VARCHAR2(100)
);

ALTER TABLE property_comfort_types ADD CONSTRAINT property_comfort_types_pk PRIMARY KEY ( comfort_type_code );

CREATE TABLE property_conditions (
    property_condition_code VARCHAR2(5) NOT NULL,
    property_condition_desc VARCHAR2(100)
);

ALTER TABLE property_conditions ADD CONSTRAINT property_conditions_pk PRIMARY KEY ( property_condition_code );

CREATE TABLE property_description (
    property_id         NUMBER NOT NULL,
    property_type       VARCHAR2(5) NOT NULL,
    property_sub_type   VARCHAR2(5) NOT NULL,
    property_condition  VARCHAR2(5),
    property_view       VARCHAR2(5),
    orientation         VARCHAR2(5),
    heating_type        VARCHAR2(5),
    parking             VARCHAR2(5),
    comfort_rate        VARCHAR2(100),
    attic_loft          VARCHAR2(2),
    bathroom_toilet     VARCHAR2(5),
    floor_number        NUMBER,
    avg_room_height     NUMBER,
    elevator            VARCHAR2(2),
    balcony_patio       VARCHAR2(2),
    safe_for_wheelchair VARCHAR2(2),
    airconditioning     VARCHAR2(2),
    garden              VARCHAR2(2),
    property_price      NUMBER NOT NULL,
    property_size       NUMBER,
    num_of_whole_rooms  NUMBER,
    num_of_half_rooms   NUMBER,
    num_of_bathrooms    NUMBER,
    stairs              VARCHAR2(5),
    plot_size           NUMBER,
    num_of_floors       NUMBER,
    basement            VARCHAR2(2),
    attic               VARCHAR2(2),
    basement_loft       VARCHAR2(2),
    description         CLOB,
    electricity         VARCHAR2(5),
    water               VARCHAR2(5),
    gas                 VARCHAR2(5),
    pipage              VARCHAR2(5)
);

COMMENT ON COLUMN property_description.property_type IS
    '�P�LET T�PUSA (T�GLA, PANEL,...)';

COMMENT ON COLUMN property_description.basement_loft IS
    'SZUTER�N?';

ALTER TABLE property_description ADD CONSTRAINT property_description_pk PRIMARY KEY ( property_id );

CREATE TABLE property_heatings (
    heating_type_code VARCHAR2(5) NOT NULL,
    heating_type_desc VARCHAR2(100)
);

ALTER TABLE property_heatings ADD CONSTRAINT property_heatings_pk PRIMARY KEY ( heating_type_code );

CREATE TABLE property_location (
    property_id     NUMBER NOT NULL,
    zip_code        VARCHAR2(4) NOT NULL,
    city            NVARCHAR2(500),
    street_name     NVARCHAR2(500),
    street_type     NVARCHAR2(50),
    street_number   VARCHAR2(10),
    building_number VARCHAR2(10),
    floor_number    VARCHAR2(10),
    door_number     VARCHAR2(10)
);

ALTER TABLE property_location ADD CONSTRAINT property_details_pk PRIMARY KEY ( property_id );

CREATE TABLE property_orientations (
    property_orientation_code VARCHAR2(5) NOT NULL,
    property_orientation_desc VARCHAR2(100)
);

ALTER TABLE property_orientations ADD CONSTRAINT property_orientations_pk PRIMARY KEY ( property_orientation_code );

CREATE TABLE property_sub_types (
    property_sub_type_code VARCHAR2(5) NOT NULL,
    property_sub_type_desc VARCHAR2(100)
);

ALTER TABLE property_sub_types ADD CONSTRAINT property_sub_types_pk PRIMARY KEY ( property_sub_type_code );

CREATE TABLE property_type (
    property_type_id   NUMBER NOT NULL,
    property_type_desc VARCHAR2(100)
);

ALTER TABLE property_type ADD CONSTRAINT property_type_pk PRIMARY KEY ( property_type_id );

CREATE TABLE property_types (
    property_type_code VARCHAR2(5) NOT NULL,
    property_type_desc VARCHAR2(100)
);

ALTER TABLE property_types ADD CONSTRAINT property_types_pk PRIMARY KEY ( property_type_code );

CREATE TABLE property_views (
    property_view_code VARCHAR2(5) NOT NULL,
    property_view_desc VARCHAR2(100)
);

ALTER TABLE property_views ADD CONSTRAINT property_views_pk PRIMARY KEY ( property_view_code );

CREATE TABLE property_x_photo (
    property_id NUMBER NOT NULL,
    photo_id    NUMBER NOT NULL
);

ALTER TABLE property_x_photo ADD CONSTRAINT property_x_photo_pk PRIMARY KEY ( property_id,
                                                                              photo_id );

CREATE TABLE property_x_profile (
    property_id NUMBER NOT NULL,
    profile_id  NUMBER NOT NULL
);

ALTER TABLE property_x_profile ADD CONSTRAINT property_x_profile_pk PRIMARY KEY ( property_id );

CREATE TABLE property_x_realtor (
    property_id NUMBER NOT NULL,
    realtor_id  NUMBER NOT NULL
);

ALTER TABLE property_x_realtor ADD CONSTRAINT property_x_realtor_pk PRIMARY KEY ( property_id,
                                                                                  realtor_id );

CREATE TABLE realtor (
    realtor_id    NUMBER NOT NULL,
    first_name    NVARCHAR2(100) NOT NULL,
    middle_name   NVARCHAR2(100),
    last_name     NVARCHAR2(100) NOT NULL,
    commision_pct NUMBER,
    work_since    DATE NOT NULL,
    phone_number  VARCHAR2(100),
    email_address VARCHAR2(100),
    photo_file    VARCHAR2(800),
    work_end_date DATE
);

ALTER TABLE realtor ADD CONSTRAINT realtor_pk PRIMARY KEY ( realtor_id );

CREATE TABLE stairs_types (
    stair_type_code VARCHAR2(5) NOT NULL,
    stair_type_desc VARCHAR2(100)
);

ALTER TABLE stairs_types ADD CONSTRAINT stairs_types_pk PRIMARY KEY ( stair_type_code );

ALTER TABLE admin
    ADD CONSTRAINT admin_profile_fk FOREIGN KEY ( profile_id )
        REFERENCES profile ( profile_id );

ALTER TABLE admin
    ADD CONSTRAINT admin_realtor_fk FOREIGN KEY ( realtor_id )
        REFERENCES realtor ( realtor_id );

ALTER TABLE photos
    ADD CONSTRAINT photos_property_x_photo_fk FOREIGN KEY ( photo_id )
        REFERENCES property_x_photo ( property_id,
                                      photo_id );

ALTER TABLE profile
    ADD CONSTRAINT profile_property_x_profile_fk FOREIGN KEY ( profile_id )
        REFERENCES property_x_profile ( property_id );

ALTER TABLE property_description
    ADD CONSTRAINT property_bathr_toilet_types_fk FOREIGN KEY ( bathroom_toilet )
        REFERENCES bathroom_toilet_types ( bathroom_toilet_type_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_comfort_types_fk FOREIGN KEY ( comfort_rate )
        REFERENCES property_comfort_types ( comfort_type_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_conditions_fk FOREIGN KEY ( property_condition )
        REFERENCES property_conditions ( property_condition_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_descr_attic_types_fk FOREIGN KEY ( attic_loft )
        REFERENCES attic_types ( attic_type_code );
 
ALTER TABLE property_description
    ADD CONSTRAINT property_descr_property_fk FOREIGN KEY ( property_id )
        REFERENCES property ( property_id );

ALTER TABLE property_location
    ADD CONSTRAINT property_details_property_fk FOREIGN KEY ( property_id )
        REFERENCES property ( property_id );

ALTER TABLE property_description
    ADD CONSTRAINT property_e_w_g_p_types_fk FOREIGN KEY ( electricity )
        REFERENCES e_w_g_p_types ( e_w_g_p_type_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_e_w_g_p_types_fk2 FOREIGN KEY ( water )
        REFERENCES e_w_g_p_types ( e_w_g_p_type_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_e_w_g_p_types_fk3 FOREIGN KEY ( gas )
        REFERENCES e_w_g_p_types ( e_w_g_p_type_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_e_w_g_p_types_fk4 FOREIGN KEY ( pipage )
        REFERENCES e_w_g_p_types ( e_w_g_p_type_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_heatings_fk FOREIGN KEY ( heating_type )
        REFERENCES property_heatings ( heating_type_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_orientations_fk FOREIGN KEY ( orientation )
        REFERENCES property_orientations ( property_orientation_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_parking_types_fk FOREIGN KEY ( parking )
        REFERENCES parking_types ( parking_type_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_stairs_types_fk FOREIGN KEY ( stairs )
        REFERENCES stairs_types ( stair_type_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_sub_types_fk FOREIGN KEY ( property_sub_type )
        REFERENCES property_sub_types ( property_sub_type_code );

ALTER TABLE property_type
    ADD CONSTRAINT property_type_property_fk FOREIGN KEY ( property_type_id )
        REFERENCES property ( property_id );

ALTER TABLE property_description
    ADD CONSTRAINT property_types_fk FOREIGN KEY ( property_type )
        REFERENCES property_types ( property_type_code );

ALTER TABLE property_description
    ADD CONSTRAINT property_views_fk FOREIGN KEY ( property_view )
        REFERENCES property_views ( property_view_code );

ALTER TABLE property_x_photo
    ADD CONSTRAINT property_x_photo_property_fk FOREIGN KEY ( property_id )
        REFERENCES property ( property_id );

ALTER TABLE property_x_profile
    ADD CONSTRAINT property_x_profile_property_fk FOREIGN KEY ( property_id )
        REFERENCES property ( property_id );

ALTER TABLE property_x_realtor
    ADD CONSTRAINT property_x_realtor_property_fk FOREIGN KEY ( property_id )
        REFERENCES property ( property_id );

ALTER TABLE realtor
    ADD CONSTRAINT realtor_property_x_realtor_fk FOREIGN KEY ( realtor_id )
        REFERENCES property_x_realtor ( property_id,
                                        realtor_id );

