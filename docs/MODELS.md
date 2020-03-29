## Player

-   has many nodes

```
first_name
last_name
email
is_admin
```

---

### Node

-   belongs to player
-   belongs to game

```
player_id
parent
is_active
closed_at
game_id
content
```

---

### Game

-   has many rounds
-   has many nodes

---

```
game_start
game_end
game_name
```

---

### Round

-   belongs to game

```
round_start
round_end
game_id
```
