CREATE TABLE notice(
id int(11) PRIMARY KEY AUTO_INCREMENT,
title varchar(100) NOT NULL,
content TEXT NOT NULL,
description TEXT,
pubdate date NOT NULL ,
tags TEXT,
file varchar2(255)
);
