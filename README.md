# Installation: #

## Requirements: Oracle VirtualBox ,Vagrant ,Git. ##

1.Get to the folder which will hold your project it is preffered thats on SSD 

You just need to type 3 commands NOTE!!!:Allthough these 3 commands will install everything necessary you still have to monitor the process constantly and press enter or enter Y when you are prompted to.

```

git clone https://github.com/Sinepitiss/TTPracticalAssignment.git && cd TTPracticalAssignment && vagrant up && vagrant ssh

cd /vagrant && sudo apt-get install make && sudo make initial

cd project && composer install && cd ../ && sudo make initial2

```
## Edit hostfile ##

```
1)Open notepad with administrator privilages.
2)Open file hosts located at C:\Windows\System32\drivers\etc
3)Add this line: 192.168.33.10 hockeyflops
4)Now you can acces the site by typing hockeyflops:8080 in your browser.
```
# Description of Practical Assignment “hockey-flop” #

## Team of Developers ##

There are three students participating in the development of the system: 

- Gatis Daukša gd17015 (business logic development, programming of controllers and models)

- Raivis Kokins  rk17059 ( design ,user interface design, programming of controllers and models)

- Edgars Baumanis  eb17079 (design, user interface design, programming of controllers and models)


## Development Environment ##
   It is planned to develop the system in PHP 7.1 environment using Laravel 5.6 library. It is planned to use MySQL database for data storage. The code will be stored in the GitHub system.

## Main Functionality ##
   Within the framework of the practical assignment, it is planned to develop a system in which you can keep up with the latest games in hockey. It will be possible to see Games, tournament tree and users will be able to comment on games and subscribe to teams to get news on: new games and tournaments in which the team is involved in ,new players and coaches in the team ,or if some players leave the team , or team has changed their lineups.
Administrators will post all of this data and flag comments as offensive ,if user makes 10 offensive comments he will be automatically banned ,or he can be banned manually before that.


## Data Registry ##
   The most important parts of this ER model are:Participant and Team,Participant can be either player or coach depending on Role ,all of them belong to a certain Team has Lineups and each team is in a League  ,these Leagues can have Tournaments which will have all teams participating.Tournaments consist of Games.After a game has concluded Users can Comment on it and if a user wishes ,he can subscribe to a team to get updated on the newest events surrounding this team.


## MVC ##
The system will be implemented following an MVC paradigm. The system will be distributed into the following components: 

    Models: 
        User,
        Tokken,
        Subscribe,
        Team,
        Participant,
        Lineup,
        League,
        Tournament,
        Game,
        Comment;
    Views:
        list of teams with a search box,
        list of leagues with a search box,
        list of tournaments with a search box,
        list of GAMES with a search box,
        list of players with a search box,
        list of Participants with a search box,
        view for adding a comment to a game,
        view for flagging comments,
        view for deleting comment,
        and others



## Controllers: ##

-  TeamController with methods for retrieving and showing a list of teams (index), creating (create) and saving (strore) new teams, deleting (destroy) a team, as well as editing (edit) and saving changes in the database (update) to an existing team,  returning a list of galleries filtered by search string in gallery name (search);

-  ParticipantController with methods for retrieving and showing a list of participants (index), creating (create) and saving (strore) new participants, deleting (destroy) participants, as well as editing (edit) and saving changes in the database (update) to  existing participants, returning a list of galleries filtered by search string in gallery name (search);

-  TournamentController with methods for retrieving and showing a list of tournament (index), creating (create) and saving (strore) a new tournament, deleting (destroy) tournaments, as well as editing (edit) and saving changes in the database (update) to existing tournaments, returning a list of galleries filtered by search string in gallery name (search);

-  LeaguesController with methods for retrieving and showing a list of leagues (index), creating (create) and saving (strore) new leagues, deleting (destroy) leagues, as well as editing (edit) and saving changes in the database (update) to existing leagues, returning a list of galleries filtered by search string in gallery name (search);

-  LineupController with methods for retrieving and showing a list of lineup (index), creating (create) and saving (strore) new lineups, deleting (destroy) lineups, as well as editing (edit) and saving changes in the database (update) to existing lineups, returning a list of galleries filtered by search string in gallery name (search);

## User Roles ##

There will be five kind of roles:

-  Visitor, 
-  User, 
-  Administrator, 
-  System Administrator, 
-  Super Admin.

Each next user inherits previous user roles.

### Visitor: ###

    1.See Information about games ,which includes:

        a)Participating teams.
        b)Score.
        c)Comments.
        d)Tournament.
        e)League .
    2.See Information about teams ,which includes:

        a)Name.
        b)Description.
        c)Games which Team has participated in.
        d)Players.
        e)Coaches.
        f)League.
        e)Tournament.
    
    3.See Information about players,which includes:

        a)Name.
        b)Surname.
        c)Position.
        d)Number.
        e)Team.
    
    4.See Information about coaches,which includes:

        a)Name.
        b)Surname.
        c)Name.
    
    5.See Information about Leagues,which includes:

        a)Name.
        b)Description.
        c)Teams.
        d)Tournaments.
    
    6.See Information about Tournaments,which includes:

        a)Name.
        b)Description.
        c)Teams.
        d)League.
        e)Tournament tree.
    
    7.Report comment as offensive.
    
    8.Register

### User: ###

    1.Comment on games.
    2.Subscribe to teams.
    3.Change his public name.
    4.Edit his own comment 5 minutes after creating it.

### Administrator: ###

    1.Create teams,players,coaches,tournaments,leagues,lineups.
    2.Edit or Delete teams,players,coaches,tournaments,leagues,lineups hour after their creation. 
    3.Flag Comment as offensive

### System Administrator: ###

    1.Edit or Delete teams,players,coaches,tournaments. 
    2.Change user roles , except for Super Admin and except to Super Admin.
    3.Ban Users ,except for Super Admin.

### Super Administrator: ###
    1.Change user roles.
    2.Ban Users.


## User Authentication  ##
   There will be a local registration with e-mails .Authentication will be done by user name and password.Passwords will be encrypted.User browser will receive a token which will be valid for 5 hours ,or until user logs out.




## System Interface ##
   The image shows the form for a game score. In the form a user can choose to subscribe to a team which tournament they are viewing. Also a user can choose to view the comments for a match, news about this match, teams involved, pictures of the match and the best moments in a video format. Similarly, there are operations available to the user where they can choose to view the their subscribed teams and tournaments, news about popular tournaments and games, and chat with the general public.



