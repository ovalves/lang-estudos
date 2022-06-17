const PI:f32 = 3.14;
static STATIC_VAR:i8 = 127;
static mut UNSAFE_STATIC_VAR:i8 = 127;

fn sum(a:i8, b:i8) -> i8
{
    println!("{} + {} = {}", a, b, a + b);
    a + b
}

fn ownership()
{
    let name = String::from("RUST");

    borrowing(&name);
    println!("ownership -> LANG {}", name);
}

fn borrowing(name: &String)
{
    println!("borrowed -> NAME {}", name);
}

fn main()
{
    let name = "RUST";
    let len = name.len();
    let chr:char = 'R';

    println!("Olá mundo {}, size of {}", name, len);
    println!("size of val {}", std::mem::size_of_val(&name));
    println!("size of val char {}", std::mem::size_of_val(&chr));
    println!("PI {}", PI);
    println!("STATIC VAR {}", STATIC_VAR);

    unsafe {
        println!("UNSAFE STATIC VAR {}", UNSAFE_STATIC_VAR);
    }

    if 5 > 3 {
        println!("SOMA {}", sum(1, 5));
    }

    let mut i:i8 = 0;
    while i < 5 {
        i += 1;
        println!("WHILE -> I = {}", i);
    }

    let mut j:i8 = 0;
    loop {
        if j == 5 {
            break;
        }
        j += 1;
        println!("LOOP -> J = {}", j);
    }

    for k in 0..=5 {
        println!("FOR -> k = {}", k);
    }

    let number:i8 = 7;
    let match_pattern = match number {
        1 => "Number 1",
        2 => "Number 2",
        3 => "Number 3",
        4 | 5 => "Number 4, 5",
        _ if number == 7 => "Number 7",
        _ => "Default"
    };

    println!("Match Pattern -> {}", match_pattern);

    ownership();

    error();

    panic!("ERROR -> PANIC");
}

fn error()
{
    match res() {
        Ok(response) => println!("OK -> {}", response),
        Err(code) => println!("Error -> {}", code),
    };
}

fn res() -> Result<String, u16>
{
    // Ok(String::from("Ok 200"))
    Err(502)
}