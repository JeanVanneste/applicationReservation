-- Table: public.reservation

-- DROP TABLE public.reservation;

CREATE TABLE public.reservation
(
  destination character varying(255) NOT NULL,
  seattotal integer NOT NULL DEFAULT 1,
  insurance boolean DEFAULT false,
  id integer NOT NULL DEFAULT nextval('reservation_id_seq'::regclass),
  CONSTRAINT reservation_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.reservation
  OWNER TO jean;

