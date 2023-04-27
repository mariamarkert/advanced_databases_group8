import cx_Oracle
import datetime
import pandas as pd
import numby as np

ip = '3.211.82.27'

port = 800
#port = 8008
SID = 'DW'

dsn_tns = cx_Oracle.makedsn(ip,port,SID)
