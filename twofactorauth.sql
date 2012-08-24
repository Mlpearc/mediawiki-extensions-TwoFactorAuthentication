CREATE TABLE /*_*/twofactorauth (
	-- User ID
	id int not null primary key,

	-- Secret key
	secret varchar(255) binary not null,

	-- List of tokens
	scratch_tokens varchar(512) binary not null

) /*$wgDBTableOptions*/;
