# Constituents Record project 

### About the project 
This project is inspired by the recent Philippine elections wherein the local "leader tactic" is used by locally running candidates. 

To paint a picture, imagine this: <br>
Candidate John Smith is running for a city-wide position. The city he is running for is composed of 20 towns. In each of those towns, John appoints a contact person to gather votes for him. 

In Town A, John appointed Lucy to be his contact person. Lucy's job is to gather others who're considerably influential in their town to be a "leader" and support John. Those leaders then recruit people who can be their "sub-leaders" to list down the people who are very likely to support John's candidacy. 

Long before the election, John's supporters are given different advantages to strengthen their likeness towards him. The higher the candidate's current position is in the government, the more benefits they can roll out. For instance, say John is currently working as the city's mayor. John can give out financial benefits or job opportunities to his supporters. The supporters are then expected to spread through word of mouth the good things they received, further enticing others to join them. 

This is the general gist of how local elections work in the Philippines. The scale may vary depending but the idea is as is. 

### Updates
**2025/05/19**
- Updated database schema reference
    - Added back `barangay_level_users` and `city_level_users` tables.
    - Added `super_admin` to roles
        - Role has similar permissions to `admin` but also oversees all accounts in the system.
    - Roles' new scopes: 
        - Leader, limited to barangay-level
        - Admin, limited to city-level
        - Super Admin, the whole province
- Create models files for address entities (`city` and `barangay`). 
- Created `address.php` as config file for `cities` and `barangay`. 
- Created seeders for address entities.
- Added migration files for `city_level_users` and `barangay_level_users`.

<br><br>
**2025/05/18**
- Updated README file to be more informative. 
- Updated database schema reference. 
    - Removed `barangay_level_users` and `city_level_users` tables. These were initially added because the tables `provinces` and `regions` previously existed.
    - Reduced roles to just two: `leader` and `admin`. 
        - Leaders have permissions over their people. 
        - Admin have permissions over everyone. 
    - Roles may expand to 3 with `encoders` who will be responsible for listing which constituents received which benefits. 
    - Added columns `status` and `verified_by_id` to `constituents_received_benefits` table. This is to accommodate the often-occurring incident of benefiting constituents failing to receive their benefits within the alloted time. 
        - Constituents' leaders will be the ones to verify this information. 
- Updated migration files to reflect changes in database schema reference. 

<br><br>
**2025/05/17**
- Migration files for the identified entities are completed. 
- Reference image of the database schema has been added to the project, to be found in the `resources/reference` folder. 
    - The roles listed under the `roles` column for the `users` table is subject to change. Requires distinction between `admin` and `super_admin`. 
    - The `audit_trail` table is yet completed. Relationship with other tables has yet been established, if any. 