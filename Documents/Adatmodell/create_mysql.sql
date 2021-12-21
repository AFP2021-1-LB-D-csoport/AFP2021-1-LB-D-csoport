
CREATE TABLE profile (
    profile_id           NUMERIC NOT NULL,
    user_name            VARCHAR(100),
    email_address        VARCHAR(100),
    phone_number         VARCHAR(100),
    date_of_registration DATE NOT NULL,
    status               VARCHAR(10) NOT NULL,
    CONSTRAINT profile_pk PRIMARY KEY ( profile_id )
);

CREATE TABLE property_type (
    property_type_id   VARCHAR(2) NOT NULL,
    property_type_desc VARCHAR(100),
    CONSTRAINT property_type_pk PRIMARY KEY ( property_type_id )
);

CREATE TABLE property (
    property_id      NUMERIC NOT NULL,
    date_on_market   DATE,
    date_of_market   DATE,
    status           VARCHAR(100) NOT NULL,
    property_type_id VARCHAR(2) NOT NULL,
    CONSTRAINT property_pk PRIMARY KEY ( property_id ),
    CONSTRAINT property_type_fk FOREIGN KEY ( property_type_id )
        REFERENCES property_type ( property_type_id )
);

CREATE TABLE photos (
    photo_id    NUMERIC NOT NULL,
    FILE        NVARCHAR(800) NOT NULL,
    description NVARCHAR(800),
    title       NVARCHAR(100),
    status      VARCHAR(10),
    CONSTRAINT photos_pk PRIMARY KEY ( photo_id )
);

CREATE TABLE attic_types (
    attic_type_code VARCHAR(5) NOT NULL,
    attic_type_desc VARCHAR(100),
    CONSTRAINT attic_types_pk PRIMARY KEY ( attic_type_code )
);

CREATE TABLE bathroom_toilet_types (
    bathroom_toilet_type_code VARCHAR(5) NOT NULL,
    bathroom_toilet_type_desc VARCHAR(100),
    CONSTRAINT bathroom_toilet_types_pk PRIMARY KEY ( bathroom_toilet_type_code )
);

CREATE TABLE e_w_g_p_types (
    e_w_g_p_type_code VARCHAR(5) NOT NULL,
    e_w_g_p_type_desc VARCHAR(100),
    CONSTRAINT e_w_g_p_types_pk PRIMARY KEY ( e_w_g_p_type_code )
);

CREATE TABLE parking_types (
    parking_type_code VARCHAR(5) NOT NULL,
    parking_type_desc VARCHAR(100),
    CONSTRAINT parking_types_pk PRIMARY KEY ( parking_type_code )
);

CREATE TABLE property_comfort_types (
    comfort_type_code VARCHAR(5) NOT NULL,
    comfort_type_desc VARCHAR(100),
    CONSTRAINT property_comfort_types_pk PRIMARY KEY ( comfort_type_code )
);

CREATE TABLE property_conditions (
    property_condition_code VARCHAR(5) NOT NULL,
    property_condition_desc VARCHAR(100),
    CONSTRAINT property_conditions_pk PRIMARY KEY ( property_condition_code )
);

CREATE TABLE property_heatings (
    heating_type_code VARCHAR(5) NOT NULL,
    heating_type_desc VARCHAR(100),
    CONSTRAINT property_heatings_pk PRIMARY KEY ( heating_type_code )
);

CREATE TABLE property_location (
    property_id     NUMERIC NOT NULL,
    zip_code        VARCHAR(4) NOT NULL,
    city            NVARCHAR(500),
    street_name     NVARCHAR(500),
    street_type     NVARCHAR(50),
    street_number   VARCHAR(10),
    building_number VARCHAR(10),
    floor_number    VARCHAR(10),
    door_number     VARCHAR(10),
     CONSTRAINT property_location_pk PRIMARY KEY ( property_id ),
     CONSTRAINT property_location_property_fk FOREIGN KEY ( property_id )
        REFERENCES property ( property_id )
);

CREATE TABLE property_orientations (
    property_orientation_code VARCHAR(5) NOT NULL,
    property_orientation_desc VARCHAR(100),
    CONSTRAINT property_orientations_pk PRIMARY KEY ( property_orientation_code )
);

CREATE TABLE property_sub_types (
    property_sub_type_code VARCHAR(5) NOT NULL,
    property_sub_type_desc VARCHAR(100),
    CONSTRAINT property_sub_types_pk PRIMARY KEY ( property_sub_type_code )
);

CREATE TABLE property_types (
    property_type_code VARCHAR(5) NOT NULL,
    property_type_desc VARCHAR(100),
    CONSTRAINT property_types_pk PRIMARY KEY ( property_type_code )
);

CREATE TABLE property_views (
    property_view_code VARCHAR(5) NOT NULL,
    property_view_desc VARCHAR(100),
    CONSTRAINT property_views_pk PRIMARY KEY ( property_view_code )
);

CREATE TABLE stairs_types (
    stair_type_code VARCHAR(5) NOT NULL,
    stair_type_desc VARCHAR(100),
    CONSTRAINT stairs_types_pk PRIMARY KEY ( stair_type_code )
);

CREATE TABLE property_description (
    property_id         NUMERIC NOT NULL,
    property_type       VARCHAR(5) NOT NULL,
    property_sub_type   VARCHAR(5) NOT NULL,
    property_condition  VARCHAR(5),
    property_view       VARCHAR(5),
    orientation         VARCHAR(5),
    heating_type        VARCHAR(5),
    parking             VARCHAR(5),
    comfort_rate        VARCHAR(100),
    attic_loft          VARCHAR(2),
    bathroom_toilet     VARCHAR(5),
    floor_number        NUMERIC,
    avg_room_height     NUMERIC,
    elevator            VARCHAR(2),
    balcony_patio       VARCHAR(2),
    safe_for_wheelchair VARCHAR(2),
    airconditioning     VARCHAR(2),
    garden              VARCHAR(2),
    property_price      NUMERIC NOT NULL,
    property_size       NUMERIC,
    num_of_whole_rooms  NUMERIC,
    num_of_half_rooms   NUMERIC,
    num_of_bathrooms    NUMERIC,
    stairs              VARCHAR(5),
    plot_size           NUMERIC,
    num_of_floors       NUMERIC,
    basement            VARCHAR(2),
    attic               VARCHAR(2),
    basement_loft       VARCHAR(2),
    description         LONGTEXT,
    electricity         VARCHAR(5),
    water               VARCHAR(5),
    gas                 VARCHAR(5),
    pipage              VARCHAR(5),
    CONSTRAINT property_description_pk PRIMARY KEY ( property_id ),
    CONSTRAINT property_views_fk FOREIGN KEY ( property_view )
        REFERENCES property_views ( property_view_code ),
    CONSTRAINT property_types_fk FOREIGN KEY ( property_type )
        REFERENCES property_types ( property_type_code ),
    CONSTRAINT property_sub_types_fk FOREIGN KEY ( property_sub_type )
        REFERENCES property_sub_types ( property_sub_type_code ),
    CONSTRAINT property_parking_types_fk FOREIGN KEY ( parking )
        REFERENCES parking_types ( parking_type_code ),
    CONSTRAINT property_stairs_types_fk FOREIGN KEY ( stairs )
        REFERENCES stairs_types ( stair_type_code ),
    CONSTRAINT property_orientations_fk FOREIGN KEY ( orientation )
        REFERENCES property_orientations ( property_orientation_code ),
    CONSTRAINT property_comfort_types_fk FOREIGN KEY ( comfort_rate )
        REFERENCES property_comfort_types ( comfort_type_code ),
    CONSTRAINT property_desc_attic_types_fk FOREIGN KEY ( attic_loft )
        REFERENCES attic_types ( attic_type_code ),
    CONSTRAINT property_bathr_toilet_types_fk FOREIGN KEY ( bathroom_toilet )
        REFERENCES bathroom_toilet_types ( bathroom_toilet_type_code ),
    CONSTRAINT property_heatings_fk FOREIGN KEY ( heating_type )
        REFERENCES property_heatings ( heating_type_code ),
    CONSTRAINT property_conditions_fk FOREIGN KEY ( property_condition )
        REFERENCES property_conditions ( property_condition_code ),
    CONSTRAINT property_e_w_g_p_types_fk FOREIGN KEY ( electricity )
        REFERENCES e_w_g_p_types ( e_w_g_p_type_code ),
    CONSTRAINT property_e_w_g_p_types_fk2 FOREIGN KEY ( water )
        REFERENCES e_w_g_p_types ( e_w_g_p_type_code ),
    CONSTRAINT property_e_w_g_p_types_fk3 FOREIGN KEY ( gas )
        REFERENCES e_w_g_p_types ( e_w_g_p_type_code ),
    CONSTRAINT property_e_w_g_p_types_fk4 FOREIGN KEY ( pipage )
        REFERENCES e_w_g_p_types ( e_w_g_p_type_code )
);

CREATE TABLE realtor (
    realtor_id    NUMERIC NOT NULL,
    first_name    NVARCHAR(100) NOT NULL,
    middle_name   NVARCHAR(100),
    last_name     NVARCHAR(100) NOT NULL,
    commision_pct NUMERIC,
    work_since    DATE NOT NULL,
    phone_number  VARCHAR(100),
    email_address VARCHAR(100),
    photo_file    VARCHAR(800),
    work_end_date DATE,
    CONSTRAINT realtor_pk PRIMARY KEY ( realtor_id )
);

CREATE TABLE property_x_photo (
    property_id NUMERIC NOT NULL,
    photo_id    NUMERIC NOT NULL,
    CONSTRAINT property_x_photo_pk PRIMARY KEY ( property_id, photo_id ),
    CONSTRAINT property_x_ph_phot_fk FOREIGN KEY ( photo_id )
        REFERENCES photos ( photo_id ),
    CONSTRAINT property_x_ph_prop_fk FOREIGN KEY ( property_id )
        REFERENCES property ( property_id )
);

CREATE TABLE property_x_profile (
    property_id NUMERIC NOT NULL,
    profile_id  NUMERIC NOT NULL,
    CONSTRAINT property_x_profile_pk PRIMARY KEY ( property_id, profile_id ),
    CONSTRAINT property_x_pr_prof_fk FOREIGN KEY ( profile_id )
        REFERENCES profile ( profile_id ),
    CONSTRAINT property_x_pr_prop_fk FOREIGN KEY ( property_id )
        REFERENCES property ( property_id )
);

CREATE TABLE property_x_realtor (
    property_id NUMERIC NOT NULL,
    realtor_id  NUMERIC NOT NULL,
    CONSTRAINT property_x_realtor_pk PRIMARY KEY ( property_id, realtor_id ),
    CONSTRAINT property_x_re_real_fk FOREIGN KEY ( realtor_id )
        REFERENCES realtor ( realtor_id ),
    CONSTRAINT property_x_re_prop_fk FOREIGN KEY ( property_id )
        REFERENCES property ( property_id )
);

CREATE TABLE admin (
    admin_id         NUMERIC NOT NULL,
    profile_id       NUMERIC NOT NULL,
    realtor_id       NUMERIC NOT NULL,
    permission_type  VARCHAR(100),
    permission_start DATE,
    permission_end   DATE,
    
    CONSTRAINT admin_pk PRIMARY KEY ( admin_id ),
    CONSTRAINT admin_profile_fk FOREIGN KEY ( profile_id )
        REFERENCES profile ( profile_id ),
    CONSTRAINT admin_realtor_fk FOREIGN KEY ( realtor_id )
        REFERENCES realtor ( realtor_id )
);
