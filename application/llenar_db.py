#!/usr/bin/python
# -*- coding: utf-8 -*-

import MySQLdb as sql
from random  import randint

db = sql.connect(host="localhost",user="lferreira",passwd='123',db='aplicacion');

cur = db.cursor()

productos = ['Corrector','Goma Pequeña','Goma Grande','Libro escolar','Resma Officio','Resma Carta','Sacapuntas','Goma eva','Blog','Lapices de colores','Perforadora Pequeña','Silicona Liquida','Pegamento Barra'];

for i in productos : 
	precio_uni = randint(100,2000);
	stock = randint(0,100);
	cur.execute("Insert into productos (nombre,precio_unitario,stock) values ('"+i+"',"+str(precio_uni)+","+str(stock)+")");
#cur.execute("Select * from productos");
db.commit()