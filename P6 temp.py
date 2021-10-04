# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

import mysql.connector

conexion1=mysql.connector.connect(host="localhost", 
                                  user="root",                             
                                  database="mibdpao")
cursor1=conexion1.cursor()
sql = "INSERT INTO `persona`(`ci`, `nombre`, `fechanac`, `departamento`) VALUES (%s,%s,%s,%s)"
datos=("10","Sofia Chavez","13 de febrero de 1999","01")
cursor1.execute(sql, datos)
datos=("88","Maria Paz","11 de Mayo de 2000","03")
cursor1.execute(sql, datos)
conexion1.commit()
conexion1.close()

