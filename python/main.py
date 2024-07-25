import serial
import json

# Set the correct serial port and baud rate
ser = serial.Serial('/dev/tty.usbmodem14201', baudrate=9600, timeout=1)  # Change to the correct port

while True:
    try:
        # Read a line from the serial port
        line = ser.readline().decode('utf-8').strip()

        # Debugging: Print the line received
        print(f"Received line: {line}")

        # Check if the line is not empty
        if line:
            # Parse the JSON data
            data = json.loads(line)

            # Save the data to a JSON file
            with open('../json/data.json', 'w') as json_file:
                json.dump(data, json_file)

            # Debugging: Print the parsed data
            print(f"Parsed data: {data}")

    except (ValueError, json.JSONDecodeError) as e:
        print(f"Error parsing JSON: {e}")
        continue
    except serial.SerialException as e:
        print(f"Serial error: {e}")
        break
    except KeyboardInterrupt:
        print("Program interrupted")
        break
