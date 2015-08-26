
03_products_exceptions.php
04_why_interfaces.php
04_insane.php

1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>
        <?php
            /* 
              Using your advanced knowledge of cards and arrays, Create a game of Blackjack
              Rules:
                at any given time there will only be 2 players. the dealer and player one.
                4 cards will be dealt out each round, 2 to the dealer and 2 to the player
                if the amount in the players hand is less than or equal to the amount in the dealer hand
                    you must get a hit (draw a card)
                if a player hits and the amount he has goes over 21, he has BUSTED and the dealer won that round
                if the player ever reaches an amount greater than the dealers he should stay; then it will be 
                    the dealers turn.
                The dealer must draw until he reaches an amount greater than the player or until he has BUST
                Subtract $100 from the players bank every time they lose
                Add $200 to the players bank every time they win
                Player starts with $1000 in the bank account
                Aces can either be an 11 or 1
                
                the game will continue as long as there are enough cards in the deck OR the player runs out of money
                Output:
                    How many games were played?
                    Who won the game?
                    Which round did the player's bank reach half way?
                    How many times did the player get blackjack ?
                Extra Credit && Prize =]
                    Create a function called countCards and enable it for the player NOT the dealer
(2193 Bytes)1:1PHPSpaces: 4
CollaborateOutlineDebuggerLive Coding Help!