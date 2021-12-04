-- Table: public.mensagens

-- DROP TABLE IF EXISTS public.mensagens;

CREATE TABLE IF NOT EXISTS public.mensagens
(
    id bigint NOT NULL,
    mensagem character varying COLLATE pg_catalog."default",
    CONSTRAINT mensagens_pkey PRIMARY KEY (id)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.mensagens
    OWNER to postgres;
	

INSERT INTO public.mensagens (id, mensagem) values (1, 'Bom dia, pode falar {{1}}?');
INSERT INTO public.mensagens (id, mensagem) values (2, 'Olá {{1}}, gostaríamos de reforçar que estamos à sua disposição nesse canal.');
INSERT INTO public.mensagens (id, mensagem) values (3, 'Oi {{1}}, tentei contato com você mas não consegui. Me avise quando puder falar por aqui.');
INSERT INTO public.mensagens (id, mensagem) values (4, 'Olá {{1}}, gostaria de tirar algumas dúvidas com você. Quando puder falar pode ligar para {{2}}?');