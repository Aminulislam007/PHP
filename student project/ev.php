class Student:
    def __init__(self, student_id, name, email):
        # ID length check (max 5 characters)
        if len(student_id) > 5:
            raise ValueError("ID should not exceed 5 characters.")
        
        # Email validation check for '@' and '.'
        if '@' not in email or '.' not in email:
            raise ValueError("Invalid email. It must contain '@' and '.'")
        
        self.id = student_id
        self.name = name
        self.email = email

    def result(self, search_id):
        try:
            with open("results.txt", "r") as file:
                for line in file:
                    sid, result = line.strip().split(",")
                    if sid == search_id:
                        print(f"Result for ID {search_id}: {result}")
                        return
                print("ID not found in result file.")
        except FileNotFoundError:
            print("The result file does not exist.")

# Example usage:
student1 = Student("12345", "Rahul", "rahul@example.com")
student1.result("12345")