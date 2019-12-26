## story_greet
* greet
 -utter_name

## story_goodbye
* goodbye
 -utter_goodbye

## story_thanks
* thanks
 -utter_thanks

## story_name
* name{"name":"Sam"}
 -utter_greet


## story_joke_01
* joke
 -action_joke

## story_joke_02
* greet
 - utter_name
* name{"name":"Lucy"} - User response with an entity. In this case it represents user message 'My name is Lucy.'
 - utter_greet
* joke
 - action_joke
* thanks
 - utter_thanks
* goodbye
 - utter_goodbye

## story_pekeliling_15
* ask_contact
 - utter_give_contacts

## story_pekeliling_15_a
* ask_application
 - utter_application

<!-- TEST -->
## story_location
* ask_location_office
 - utter_location
