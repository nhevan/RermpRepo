1.addDivisionUser
2.addDistrictUser
3.addUpazillaUser
4.addUnionUser
5.add -> Division, District, Upazilla, Union
6.employees/addEmployee -> including Employeemetum
7.employees/info
8.account/addDivisionAccount
9.account/addDistrictAccount
10.account/addUpazillaAccount
11.account/addUnionAccount
12.accounts/detail
13.attendances/assign
14.transactions/transferMoneyToDivision -> this function uses accountType_id hardcoded values, please match according to DB
15.transactions/transferMoneyToDistrict
16.transactions/transferMoneyToUpazilla
17.transactions/transferMoneyToUnion
18.transactions/transferMoneyToEmployee
19.unions/overview -> under construction
20.employees/unionEmployees 
21.employees/upazillaEmployees
22.employees/districtEmployees
23.upazillas/overview
24.districts/overview
25.employees/divisionEmployees -> perfectly paginated using bindModel and virtual Fields
26.divisions/overview 
27.
28.
29.
30.




MUST KEEP IN MIND
=================
1.all the "cratedBy" are now set to 1, it must be replaced with appropriate userId after ACL is implemented
2.all the hidden fields are being transferred to the controller for safety issues
3."USERTYPES" must be changed in UsersController after acl implementation and according to final DB
