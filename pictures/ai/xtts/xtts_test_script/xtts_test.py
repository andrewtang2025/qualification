from TTS.api import TTS
import time

# Load XTTS model (first run will download ~2–6GB)
tts = TTS("tts_models/multilingual/multi-dataset/xtts_v2")

# Your input text
text = """
Artificial intelligence is transforming the way we interact with technology.
From voice assistants to automated translation systems, modern AI models are becoming increasingly capable.
Text-to-speech systems such as XTTS allow users to generate natural-sounding speech using only a short audio sample.
This makes it possible to create personalized voices for accessibility, storytelling, and education.
As the technology improves, the boundary between human and synthetic speech continues to blur.
"""

# Create timestamped filename
timestamp = time.strftime("%Y%m%d_%H%M%S")
output_file = f"output_{timestamp}.wav"

# Run voice cloning
tts.tts_to_file(
    text=text,
    speaker_wav="tang.wav",
    language="en",
    file_path=output_file
)

print(f"Done! {output_file} generated.")
