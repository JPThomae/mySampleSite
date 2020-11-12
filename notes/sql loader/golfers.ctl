load data
 infile 'C:\Users\thomaej\OneDrive - WWT\Desktop\Projects\mySampleSite\notes\sql loader\mySampleSiteGolferData.csv'
 into table golfers
 fields terminated by "," optionally enclosed by '"'		  
 ( id, last_name, first_name, phone, team, handicap )