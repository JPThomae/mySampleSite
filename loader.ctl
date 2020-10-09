load data
 infile 'C:\Users\thomaej\Desktop\Projects\mySampleSite\mySampleSiteGolferData.csv'
 into table golfers
 fields terminated by "," optionally enclosed by '"'		  
 ( id, last_name, first_name, phone, team, handicap )