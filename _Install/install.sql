ALTER TABLE {pre}_access ADD access_uitotop INT(2) NOT NULL DEFAULT '0';

UPDATE {pre}_access SET access_uitotop = '0' WHERE access_id = '1';
UPDATE {pre}_access SET access_uitotop = '0' WHERE access_id = '2';
UPDATE {pre}_access SET access_uitotop = '0' WHERE access_id = '3';
UPDATE {pre}_access SET access_uitotop = '0' WHERE access_id = '4';
UPDATE {pre}_access SET access_uitotop = '5' WHERE access_id = '5';

INSERT INTO {pre}_options (options_mod, options_name, options_value) VALUES ('uitotop', 'img', 'ui.totop.png');
INSERT INTO {pre}_options (options_mod, options_name, options_value) VALUES ('uitotop', 'max_width', '100');
INSERT INTO {pre}_options (options_mod, options_name, options_value) VALUES ('uitotop', 'max_height', '100');
INSERT INTO {pre}_options (options_mod, options_name, options_value) VALUES ('uitotop', 'max_size', '51200');
INSERT INTO {pre}_options (options_mod, options_name, options_value) VALUES ('uitotop', 'filetypes', 'jpg,jpeg,gif,png');